# Modulo Activity

## Descrizione

Il modulo Activity fornisce funzionalità di tracciamento delle attività e di audit log all'interno dell'applicazione. Permette di registrare e visualizzare le azioni eseguite dagli utenti all'interno del sistema.

## Analisi PHPStan

Il modulo ha raggiunto un livello di qualità PHPStan 9, dimostrando un'eccellente aderenza alle migliori pratiche di programmazione e tipizzazione.

- [Riassunto dell'analisi PHPStan](phpstan/README.md)
- [Correzioni per raggiungere il livello 10](phpstan_fixes.md)
- [Documentazione generale PHPStan](/docs/phpstan/README.md)

## Principale Funzionalità

- Registrazione delle attività degli utenti
- Tracciamento delle modifiche agli oggetti (subject)
- Identificazione dell'utente che ha eseguito l'azione (causer)
- Memorizzazione delle proprietà dell'entità prima e dopo le modifiche

## Tabelle del Database

- `activity` - Tabella principale per il tracciamento delle attività
- `stored_events` - Archiviazione di eventi nel modello Event Sourcing
- `snapshots` - Registrazioni periodiche dello stato delle entità

## Uso del Modulo

Per utilizzare il modulo Activity, è necessario:

1. Importare il trait `LogsActivity` nei modelli da monitorare
2. Configurare gli attributi da registrare tramite le proprietà del modello
3. Accedere ai log tramite il modello `Activity`

## Aggiornamenti Recenti

### Risoluzione Conflitti Git

Sono stati risolti importanti conflitti di merge nelle migrazioni del database:

- **2023_10_30_103350_create_stored_events_table.php**
- **2023_03_31_103350_create_activity_table.php**
- **2023_10_31_103350_create_snapshots_table.php**

La risoluzione ha mantenuto la tipizzazione esplicita dei parametri e la documentazione PHPDoc. Inoltre, sono stati risolti conflitti nei file di documentazione PHPStan.

Per maggiori dettagli, consultare il [Rapporto sulla Risoluzione dei Conflitti](/docs/risoluzione_conflitti_merge_update.md).

## Scopo della modifica
- Migliorare l'analisi statica e la leggibilità aggiungendo il type hint `Blueprint $table` e un docblock esplicativo nelle closure delle migrazioni.
- [Documentazione principale](/docs/README.md)

## Collegamenti

- [Documentazione PHPStan generale](/docs/phpstan.md)
- [Problemi e soluzioni PHPStan](/docs/phpstan/problemi_e_soluzioni.md) 
