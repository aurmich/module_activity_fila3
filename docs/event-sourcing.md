<<<<<<< HEAD
# Event Sourcing in Laravel

Questo documento fornisce una guida completa sull'implementazione dell'**Event Sourcing** in Laravel, basata sul libro *Event Sourcing in Laravel* di Brent Roose, pubblicato da Spatie nel 2021. Include concetti fondamentali, pattern avanzati, sfide, casi d'uso pratici e consigli per migliorare il codice esistente nel contesto del modulo `Activity`.

## Introduzione all'Event Sourcing

L'Event Sourcing è un approccio architetturale in cui ogni cambiamento allo stato di un'applicazione viene catturato in un oggetto evento. Questi eventi sono memorizzati in sequenza, rappresentando la storia completa delle modifiche, a differenza dell'approccio CRUD tradizionale dove solo lo stato finale viene salvato.

### Vantaggi
- **Tracciabilità Completa**: Ogni azione è registrata come evento, fornendo un audit trail dettagliato.
- **Flessibilità**: Nuove funzionalità possono essere aggiunte rigiocando eventi su nuovi proiettori senza modificare i dati esistenti.
- **Ricostruzione dello Stato**: Gli eventi permettono di ricostruire stati passati per debugging o analisi.

### Sfide
- **Complessità**: La gestione di eventi e proiezioni è più complessa rispetto a CRUD.
- **Performance**: Rigiocare molti eventi può essere lento, richiedendo snapshot.
- **Versionamento**: Gli eventi devono essere versionati per gestire cambiamenti nella struttura dei dati.

## Concetti Fondamentali

### 1. Design Orientato agli Eventi
Il design orientato agli eventi si concentra sulla modellazione attorno agli eventi piuttosto che sullo stato finale. Ad esempio, invece di aggiornare un campo "saldo", si registrano eventi come `DepositMade` o `WithdrawalMade`.

### 2. Eventi
Gli eventi rappresentano qualcosa che è accaduto nel sistema (es. `ActivityLogged`, `UserRegistered`). Devono essere specifici e contenere dati rilevanti.

### 3. Radici Aggregate
Le radici aggregate incapsulano la logica di business per un'entità specifica, garantendo coerenza dello stato. Ad esempio, un `ActivityAggregateRoot` potrebbe gestire eventi come `ActivityStarted` e `ActivityCompleted`.

**Esempio di Radice Aggregate in Laravel**:
```php
namespace Modules\Activity\Aggregates;

class ActivityAggregateRoot
{
    private $uuid;
    private $activities = [];
    
    public static function start(string $uuid): self
    {
        $aggregate = new self();
        $aggregate->recordThat(new ActivityStarted($uuid));
        return $aggregate;
    }
    
    public function logActivity(string $type, array $data)
    {
        $this->recordThat(new ActivityLogged($this->uuid, $type, $data));
    }
    
    protected function applyActivityStarted(ActivityStarted $event)
    {
        $this->uuid = $event->uuid;
    }
    
    protected function applyActivityLogged(ActivityLogged $event)
    {
        $this->activities[] = ['type' => $event->type, 'data' => $event->data];
    }
    
    private function recordThat($event)
    {
        // Logica per registrare l'evento
    }
}
```

### 4. Proiettori
I proiettori creano viste di lettura basate sugli eventi. Ad esempio, un proiettore può aggiornare una tabella `activity_logs` con il conteggio delle attività.

**Esempio di Proiettore**:
```php
namespace Modules\Activity\Projectors;

class ActivityLogProjector
{
    public function onActivityLogged(ActivityLogged $event, string $uuid)
    {
        $log = ActivityLog::findOrCreate($uuid);
        $log->increment('count');
        $log->save();
    }
}
```

## Pattern Avanzati

### 1. Gestione dello Stato
Utilizzare macchine a stati per gestire transizioni complesse. Ad esempio, un'attività potrebbe passare da "iniziata" a "completata" con regole specifiche.

### 2. CQRS (Command Query Responsibility Segregation)
Separare le operazioni di scrittura (comandi) da quelle di lettura (query). I comandi generano eventi, mentre le query leggono da modelli proiettati.

## Sfide e Soluzioni

### 1. Versionamento degli Eventi
Utilizzare convertitori per trasformare eventi vecchi in nuovi formati durante la rigiocata.

### 2. Snapshotting
Salvare periodicamente lo stato corrente di un aggregato per ridurre il numero di eventi da rigiocare.

## Casi d'Uso nel Modulo Activity

1. **Registrazione delle Attività Utente**:
   - **Evento**: `UserActivityLogged`
   - **Descrizione**: Registra ogni azione significativa dell'utente (es. login, aggiornamento profilo).
   - **Proiezione**: Aggiorna una tabella `user_activities` per report rapidi.

2. **Monitoraggio delle Modifiche**:
   - **Evento**: `EntityUpdated`
   - **Descrizione**: Registra modifiche a entità critiche (es. pazienti, appuntamenti).
   - **Proiezione**: Crea un log storico per audit.

## Esempi Pratici

**Registrazione di un'Attività**:
```php
$activityAggregate = ActivityAggregateRoot::start($user->uuid);
$activityAggregate->logActivity('login', ['timestamp' => now(), 'ip' => request()->ip()]);
```

**Proiezione per Report**:
```php
class UserActivityReportProjector
{
    public function onUserActivityLogged(UserActivityLogged $event, string $uuid)
    {
        $report = UserActivityReport::findOrCreate($uuid);
        $report->last_login = $event->data['timestamp'];
        $report->save();
    }
}
```

## Consigli per Miglioramenti del Codice

1. **Refactoring delle Classi Esistenti**:
   - Identificare classi che gestiscono stato (es. `ActivityController`) e trasformarle in radici aggregate per separare la logica di business.
   - Esempio: Spostare la logica di registrazione attività da un controller a `ActivityAggregateRoot`.

2. **Aggiunta di Proiettori**:
   - Creare proiettori per viste di lettura specifiche (es. `ActivitySummaryProjector` per dashboard).
   - Garantire idempotenza nei proiettori per evitare duplicazioni.

3. **Implementazione di Snapshot**:
   - Per aggregati con molti eventi, implementare snapshot per migliorare le performance.
   - Esempio: Salvare lo stato di `ActivityAggregateRoot` ogni 100 eventi.

4. **Versionamento**:
   - Preparare un sistema di migrazione per eventi (es. script per convertire `ActivityLoggedV1` in `ActivityLoggedV2`).

5. **Testing**:
   - Seguire l'approccio di Roose, creando factory di test per eventi (es. `ActivityLoggedFactory`).
   - Testare ogni proiettore e reattore separatamente.

## Conclusione

L'Event Sourcing offre un approccio potente per gestire la complessità nel modulo `Activity`, garantendo tracciabilità e flessibilità. Implementando radici aggregate, proiettori e strategie come snapshotting, è possibile migliorare la robustezza e la scalabilità del codice esistente. Seguendo i pattern e i consigli descritti, il modulo può evolversi per supportare requisiti futuri senza compromettere la coerenza dei dati.

Se hai bisogno di ulteriori dettagli o di un'implementazione specifica, fammi sapere!
=======
# Event Sourcing, CQRS e Activity Log: Best Practice e Architettura

## Introduzione
Il modulo Activity supporta sia il logging tradizionale (spatie/laravel-activitylog) sia l'event sourcing avanzato (spatie/laravel-event-sourcing). L'obiettivo è garantire audit trail, tracciabilità, proiezioni e analytics in modo scalabile e manutenibile.

---

## Pattern supportati
- **Event Sourcing**: ogni cambiamento di stato è rappresentato da un evento persistito (event store)
- **CQRS**: separazione tra comandi (write) e query (read), con proiezioni dedicate
- **Aggregate**: logica di dominio centralizzata per consistenza e validazione
- **Projector**: componenti che trasformano eventi in viste/materializzazioni (es. report, dashboard)

---

## Best Practice
- Usare aggregate per ogni entità business critica (es. UserActivityAggregate)
- Scrivere proiettori idempotenti e testabili
- Versionare gli eventi e mantenere compatibilità retroattiva
- Utilizzare snapshot per migliorare le performance di replay
- Documentare ogni evento e proiezione
- Integrare con activitylog per audit trail legacy o ibrido

---

## Esempio di flusso (semplificato)
1. L'utente aggiorna il proprio profilo → viene generato un evento `UserProfileUpdated`.
2. L'evento viene persistito nella tabella `stored_events`.
3. Un **projector** aggiorna la tabella `user_profiles` per la lettura rapida.
4. Un **aggregate** può validare regole di business (es. limiti, workflow, ecc.).
5. Tutti gli eventi sono disponibili per audit, analytics, debugging.

---

## Strategie di migrazione e coesistenza
- È possibile mantenere sia activitylog tradizionale che event sourcing per un periodo di transizione
- Le proiezioni possono essere usate per popolare viste legacy o nuovi report
- Si consiglia di documentare le differenze tra i due approcci e i casi d'uso preferenziali

---

## Vantaggi e limiti
- **Vantaggi:**
  - Audit trail completo e immutabile
  - Debug e replay degli eventi
  - Facilità di implementazione di proiezioni e analytics
  - Possibilità di implementare CQRS
- **Svantaggi:**
  - Complessità architetturale
  - Gestione della consistenza eventuale
  - Necessità di proiezioni/materialized views per query efficienti

---

## Collegamenti e approfondimenti
- [Event Sourcing Pattern - Microsoft Docs](https://docs.microsoft.com/en-us/azure/architecture/patterns/event-sourcing)
- [spatie/laravel-event-sourcing](https://github.com/spatie/laravel-event-sourcing)
- [spatie/laravel-activitylog](https://spatie.be/docs/laravel-activitylog/v4/introduction)
- [Esempi Larabank](https://github.com/spatie/larabank-event-projector)
- [README Activity](./README.md)
- [Struttura Modulo](./structure.md)
- [Roadmap](./roadmap.md)
- [Bottlenecks](./bottlenecks.md)

---

## Collegamenti bidirezionali
- [README Activity](./README.md)
- [structure.md](./structure.md)
- [roadmap.md](./roadmap.md)
- [bottlenecks.md](./bottlenecks.md) 
>>>>>>> 6f566e3 (.)
