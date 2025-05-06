# Modulo Activity

<<<<<<< HEAD
=======
Il modulo **Activity** gestisce il logging avanzato, la tracciabilità delle azioni utente e la generazione di report sulle attività di sistema. È progettato per integrarsi con gli altri moduli della piattaforma SaluteOra, garantendo audit trail, analytics e conformità normativa (es. GDPR).
>>>>>>> bc2ed24 (.)
Il modulo **Activity** gestisce il logging avanzato, la tracciabilità delle azioni utente e la generazione di report sulle attività di sistema. È progettato per integrarsi con gli altri moduli della piattaforma, garantendo audit trail, analytics e conformità normativa (es. GDPR).

- **Namespace:** `Modules\Activity`
- **Dipendenze:** [Xot](../../Xot/docs/README.md), [User](../../User/docs/README.md), [spatie/laravel-activitylog](https://spatie.be/docs/laravel-activitylog/v4/introduction)

---

## Indice Documentazione

- [Struttura del Modulo](./structure.md): Panoramica delle directory, classi e dipendenze.
- [Roadmap](./roadmap.md): Stato di avanzamento, milestone e obiettivi futuri.
- [Bottlenecks](./bottlenecks.md): Analisi dei colli di bottiglia e soluzioni per ottimizzare le performance.
- [phpstan_fixes.md](./phpstan_fixes.md): Correzioni e linee guida per la qualità del codice secondo PHPStan.
- [filament.md](./filament.md): Integrazione e best practice con Filament.
- [lang-link.md](./lang-link.md): Collegamento e regole per l'integrazione con il modulo Lang e la gestione delle traduzioni.
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
- **[filament.md](./filament.md):** Link e risorse per l'integrazione dell'activity log con Filament.
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
<<<<<<< HEAD
=======
> - Aggiornare l’indice qui sopra
- [Struttura](./structure.md) - Panoramica delle directory, classi e dipendenze
- [Roadmap](./roadmap.md) - Stato di avanzamento, milestone e obiettivi futuri
- [Bottlenecks](./bottlenecks.md) - Analisi dei colli di bottiglia e ottimizzazioni
- [PHPStan Fixes](./phpstan_fixes.md) - Correzioni e linee guida per la qualità del codice
- [Filament](./filament.md) - Integrazione con Filament
- [Lang Link](./lang-link.md) - Integrazione con il modulo Lang
- [Translations](./translations.md) - Struttura e best practice per le traduzioni

## Vedi Anche

- [Modulo Xot](../Xot/docs/README.md) - Modulo base e linee guida generali
- [Modulo User](../User/docs/README.md) - Gestione utenti e permessi
- [Modulo Lang](../Lang/docs/README.md) - Gestione traduzioni
- [Convenzioni di Naming](../../../docs/standards/file_naming_conventions.md) - Standard per la nomenclatura dei file

> **Nota:** Quando aggiorni o aggiungi nuovi file nella cartella `docs/`, ricordati di:
>>>>>>> bc2ed24 (.)
> - Aggiornare l'indice qui sopra
> - Inserire collegamenti di ritorno e riferimenti incrociati nei nuovi documenti
> - Mantenere la coerenza con le convenzioni di documentazione del progetto

---

## Collegamenti ad altri moduli
<<<<<<< HEAD
=======
_Per contribuire alla documentazione:_
1. Segui le convenzioni di naming e struttura.
2. Aggiorna sempre i collegamenti bidirezionali.
3. Documenta le modifiche in modo chiaro.
4. Mantieni alta la qualità e la leggibilità.
### Adding Assets
>>>>>>> bc2ed24 (.)

- [Modulo Xot](../../Xot/docs/README.md)
- [Modulo User](../../User/docs/README.md)
- [Modulo Lang](../../Lang/docs/README.md)

---

_Per contribuire alla documentazione:_
1. Segui le convenzioni di naming e struttura.
2. Aggiorna sempre i collegamenti bidirezionali.
3. Documenta le modifiche in modo chiaro.
4. Mantieni alta la qualità e la leggibilità.
<<<<<<< HEAD
=======
## Building Your Site
>>>>>>> bc2ed24 (.)

---

<<<<<<< HEAD
## Scopo della modifica
- Migliorare l'analisi statica e la leggibilità aggiungendo il type hint `Blueprint $table` e un docblock esplicativo nelle closure delle migrazioni.
- [Documentazione principale](/docs/README.md)
=======
```bash
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options: dev, prod
npm run dev
```

## Collegamenti tra versioni di README.md
* [README.md](bashscripts/docs/README.md)
* [README.md](bashscripts/docs/it/README.md)
* [README.md](docs/laravel-app/phpstan/README.md)
* [README.md](docs/laravel-app/README.md)
* [README.md](docs/moduli/struttura/README.md)
* [README.md](docs/moduli/README.md)
* [README.md](docs/moduli/manutenzione/README.md)
* [README.md](docs/moduli/core/README.md)
* [README.md](docs/moduli/installati/README.md)
* [README.md](docs/moduli/comandi/README.md)
* [README.md](docs/phpstan/README.md)
* [README.md](docs/README.md)
* [README.md](docs/module-links/README.md)
* [README.md](docs/troubleshooting/git-conflicts/README.md)
* [README.md](docs/tecnico/laraxot/README.md)
* [README.md](docs/modules/README.md)
* [README.md](docs/conventions/README.md)
* [README.md](docs/amministrazione/backup/README.md)
* [README.md](docs/amministrazione/monitoraggio/README.md)
* [README.md](docs/amministrazione/deployment/README.md)
* [README.md](docs/translations/README.md)
* [README.md](docs/roadmap/README.md)
* [README.md](docs/ide/cursor/README.md)
* [README.md](docs/implementazione/api/README.md)
* [README.md](docs/implementazione/testing/README.md)
* [README.md](docs/implementazione/pazienti/README.md)
* [README.md](docs/implementazione/ui/README.md)
* [README.md](docs/implementazione/dental/README.md)
* [README.md](docs/implementazione/core/README.md)
* [README.md](docs/implementazione/reporting/README.md)
* [README.md](docs/implementazione/isee/README.md)
* [README.md](docs/it/README.md)
* [README.md](laravel/vendor/mockery/mockery/docs/README.md)
* [README.md](laravel/Modules/Chart/docs/README.md)
* [README.md](laravel/Modules/Reporting/docs/README.md)
* [README.md](laravel/Modules/Gdpr/docs/phpstan/README.md)
* [README.md](laravel/Modules/Gdpr/docs/README.md)
* [README.md](laravel/Modules/Notify/docs/phpstan/README.md)
* [README.md](laravel/Modules/Notify/docs/README.md)
* [README.md](laravel/Modules/Xot/docs/filament/README.md)
* [README.md](laravel/Modules/Xot/docs/phpstan/README.md)
* [README.md](laravel/Modules/Xot/docs/exceptions/README.md)
* [README.md](laravel/Modules/Xot/docs/README.md)
* [README.md](laravel/Modules/Xot/docs/standards/README.md)
* [README.md](laravel/Modules/Xot/docs/conventions/README.md)
* [README.md](laravel/Modules/Xot/docs/development/README.md)
* [README.md](laravel/Modules/Dental/docs/README.md)
* [README.md](laravel/Modules/User/docs/phpstan/README.md)
* [README.md](laravel/Modules/User/docs/README.md)
* [README.md](laravel/Modules/User/resources/views/docs/README.md)
* [README.md](laravel/Modules/UI/docs/phpstan/README.md)
* [README.md](laravel/Modules/UI/docs/README.md)
* [README.md](laravel/Modules/UI/docs/standards/README.md)
* [README.md](laravel/Modules/UI/docs/themes/README.md)
* [README.md](laravel/Modules/UI/docs/components/README.md)
* [README.md](laravel/Modules/Lang/docs/phpstan/README.md)
* [README.md](laravel/Modules/Lang/docs/README.md)
* [README.md](laravel/Modules/Job/docs/phpstan/README.md)
* [README.md](laravel/Modules/Job/docs/README.md)
* [README.md](laravel/Modules/Media/docs/phpstan/README.md)
* [README.md](laravel/Modules/Media/docs/README.md)
* [README.md](laravel/Modules/Tenant/docs/phpstan/README.md)
* [README.md](laravel/Modules/Tenant/docs/README.md)
* [README.md](laravel/Modules/Activity/docs/phpstan/README.md)
* [README.md](laravel/Modules/Activity/docs/README.md)
* [README.md](laravel/Modules/Patient/docs/README.md)
* [README.md](laravel/Modules/Patient/docs/standards/README.md)
* [README.md](laravel/Modules/Patient/docs/value-objects/README.md)
* [README.md](laravel/Modules/Cms/docs/blocks/README.md)
* [README.md](laravel/Modules/Cms/docs/README.md)
* [README.md](laravel/Modules/Cms/docs/standards/README.md)
* [README.md](laravel/Modules/Cms/docs/content/README.md)
* [README.md](laravel/Modules/Cms/docs/frontoffice/README.md)
* [README.md](laravel/Modules/Cms/docs/components/README.md)
* [README.md](laravel/Themes/Two/docs/README.md)
* [README.md](laravel/Themes/One/docs/README.md)

>>>>>>> bc2ed24 (.)
