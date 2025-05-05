# Modulo Activity

Il modulo **Activity** gestisce il logging avanzato, la tracciabilità delle azioni utente e la generazione di report sulle attività di sistema. È progettato per integrarsi con gli altri moduli della piattaforma SaluteOra, garantendo audit trail, analytics e conformità normativa (es. GDPR).

- **Namespace:** `Modules\Activity`
- **Dipendenze:** [Xot](../../Xot/docs/README.md), [User](../../User/docs/README.md), [spatie/laravel-activitylog](https://spatie.be/docs/laravel-activitylog/v4/introduction)

---

## Indice Documentazione

- [Struttura del Modulo](./structure.md): Panoramica delle directory, classi e dipendenze.
- [Roadmap](./roadmap.md): Stato di avanzamento, milestone e obiettivi futuri.
- [Bottlenecks](./bottlenecks.md): Analisi dei colli di bottiglia e soluzioni per ottimizzare le performance.
- [phpstan_fixes.md](./phpstan_fixes.md): Correzioni e linee guida per la qualità del codice secondo PHPStan.
- [filament.md](./filament.md): Integrazione e best practice con Filament.
- [lang-link.md](./lang-link.md): Collegamento e regole per l’integrazione con il modulo Lang e la gestione delle traduzioni.
- [translations.md](./translations.md): Struttura, esempi e best practice per i file di traduzione del modulo.

### Directory e file tecnici
- `/database/` : Script e documentazione relativa alle migrazioni e seeders.
- `/archived/` : Documenti e specifiche legacy.
- `/phpstan/` : Configurazioni e fix avanzati per la static analysis.

---

## Descrizione Sintetica dei Documenti Principali

- **[structure.md](./structure.md):** Struttura delle directory, namespace, autoload e overview delle classi principali.
- **[roadmap.md](./roadmap.md):** Obiettivi strategici, milestone, metriche di successo e dipendenze.
- **[phpstan_fixes.md](./phpstan_fixes.md):** Dettaglio delle correzioni implementate per raggiungere il livello PHPStan 9+, linee guida per mantenere alta la qualità.
- **[filament.md](./filament.md):** Link e risorse per l’integrazione dell’activity log con Filament.
- **[lang-link.md](./lang-link.md):** Regole per la localizzazione e collegamenti alle risorse del modulo Lang.
- **[translations.md](./translations.md):** Esempi e struttura dei file di traduzione per il modulo Activity.

---

## Collegamenti Bidirezionali

**Tutti i documenti elencati sopra contengono (o devono contenere) una sezione di ritorno a questo README e ai documenti correlati:**

- [README Activity](./README.md)
- [structure.md](./structure.md)
- [roadmap.md](./roadmap.md)
- [bottlenecks.md](./bottlenecks.md)
- [phpstan_fixes.md](./phpstan_fixes.md)
- [filament.md](./filament.md)
- [lang-link.md](./lang-link.md)
- [translations.md](./translations.md)

> **Nota:** Quando aggiorni o aggiungi nuovi file nella cartella `docs/`, ricordati di:
> - Aggiornare l’indice qui sopra
> - Inserire collegamenti di ritorno e riferimenti incrociati nei nuovi documenti
> - Mantenere la coerenza con le convenzioni di documentazione del progetto

---

## Collegamenti ad altri moduli

- [Modulo Xot](../../Xot/docs/README.md)
- [Modulo User](../../User/docs/README.md)
- [Modulo Lang](../../Lang/docs/README.md)

---

_Per contribuire alla documentazione:_
1. Segui le convenzioni di naming e struttura.
2. Aggiorna sempre i collegamenti bidirezionali.
3. Documenta le modifiche in modo chiaro.
4. Mantieni alta la qualità e la leggibilità.
