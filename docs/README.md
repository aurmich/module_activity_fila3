# Jigsaw Docs Starter Template

<<<<<<< HEAD
This is a starter template for creating a beautiful, customizable documentation site for your project with minimal effort. You’ll only have to change a few settings and you’re ready to go.

[View a preview of the docs template.](http://jigsaw-docs-template.tighten.co/)

## Installation

After installing Jigsaw, run the following command from your project directory:

```bash
./vendor/bin/jigsaw init docs
```

This starter template includes samples of common page types, and comes pre-configured with:

- A fully responsive navigation bar
- A sidebar navigation menu
- [Tailwind CSS](https://tailwindcss.com/), a utility CSS framework that allows you to customize your design without touching a line of CSS
- [Purgecss](https://www.purgecss.com/) to remove unused selectors from your CSS, resulting in smaller CSS files
- Syntax highlighting using [highlight.js](https://highlightjs.org/)
- A script that automatically generates a `sitemap.xml` file
- A search bar powered by [Algolia DocSearch](https://community.algolia.com/docsearch/), and instructions on how to get started with their free indexing service
- A custom 404 page

---

![Docs starter template screenshot](https://user-images.githubusercontent.com/357312/50345478-40170c00-04fd-11e9-856c-ad46d1ac45cb.png)

---

### Configuring your new site

As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/docs/site-variables/) to learn more.

```php
// config.php
return [
    'baseUrl' => 'https://my-awesome-jigsaw-site.com/',
    'production' => false,
    'siteName' => 'My Site',
    'siteDescription' => 'Give your documentation a boost with Jigsaw.',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'navigation' => require_once('navigation.php'),
];
```

> Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts). Check out the official [Jigsaw documentation](https://jigsaw.tighten.co/docs/collections/) to learn more.

---

### Adding Content

You can write your content using a [variety of file types](http://jigsaw.tighten.co/docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in `navigation.php`.

The first section of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---
```

[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/docs/content-blade/)

---

### Adding Assets

Any assets that need to be compiled (such as JavaScript, Less, or Sass files) can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run dev` or `npm run prod`. The processed assets will be stored in `/source/assets/build/` (note there is no underscore on this second `assets` directory).

Then, when Jigsaw builds your site, the entire `/source/assets/` directory containing your built files (and any other directories containing static assets, such as images or fonts, that you choose to store there) will be copied to the destination build folders (`build_local`, on your local machine).

Files that don't require processing (such as images and fonts) can be added directly to `/source/assets/`.

[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/docs/compiling-assets/)

---

## Building Your Site

Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.

```bash

# build static files with Jigsaw
./vendor/bin/jigsaw build
=======
Il modulo **Activity** gestisce il logging avanzato, la tracciabilità delle azioni utente e la generazione di report sulle attività di sistema. È progettato per integrarsi con gli altri moduli della piattaforma, garantendo audit trail, analytics e conformità normativa (es. GDPR).

<<<<<<< HEAD
- **Namespace:** `Modules\Activity`
- **Dipendenze:** [Xot](../../Xot/docs/README.md), [User](../../User/docs/README.md), [spatie/laravel-activitylog](https://spatie.be/docs/laravel-activitylog/v4/introduction), [spatie/laravel-event-sourcing](https://spatie.be/docs/laravel-event-sourcing/v7/introduction)
=======
# compile assets with Laravel Mix

# options: dev, prod
npm run dev
```
>>>>>>> 5e7bc52 (.)

---

## Indice Documentazione

- [Struttura del Modulo](./structure.md): Panoramica delle directory, classi e dipendenze.
- [Event Sourcing & Proiezioni](./event-sourcing.md): Pattern, esempi, best practice e integrazione con Spatie Event Sourcing.
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

## Event Sourcing, Proiezioni e Aggregate (Pattern e Best Practice)

### Cos'è l'Event Sourcing?
L'**Event Sourcing** è un pattern architetturale in cui ogni cambiamento di stato viene rappresentato come un evento immutabile, persistito in una event store. Lo stato attuale viene ricostruito rigiocando la sequenza di eventi.

- **Vantaggi:**
  - Audit trail completo e immutabile
  - Debug e replay degli eventi
  - Facilità di implementazione di proiezioni e analytics
  - Possibilità di implementare CQRS (Command Query Responsibility Segregation)
- **Svantaggi:**
  - Complessità architetturale
  - Gestione della consistenza eventuale
  - Necessità di proiezioni/materialized views per query efficienti

### Proiezioni e Aggregate
- **Proiezione:** Una vista derivata dagli eventi, ottimizzata per la lettura (es. report, dashboard, contatori, timeline utente).
- **Aggregate:** Un oggetto che incapsula la logica di business e garantisce la coerenza degli eventi correlati a un'entità (es. Account, Order, Patient).

### Implementazione con Spatie Event Sourcing
- **Pacchetto:** [spatie/laravel-event-sourcing](https://github.com/spatie/laravel-event-sourcing)
- **Esempi:**
  - [Larabank Traditional](https://github.com/spatie/larabank-traditional)
  - [Larabank Event Projector](https://github.com/spatie/larabank-event-projector)
  - [Larabank Event Projector Aggregates](https://github.com/spatie/larabank-event-projector-aggregates)
  - [Demo App](https://github.com/spatie/laravel-event-projector-demo-app)
- **Documentazione:**
  - [Spatie Event Sourcing Docs](https://docs.spatie.be/laravel-event-sourcing/v7/introduction)
  - [Microsoft Event Sourcing Pattern](https://docs.microsoft.com/en-us/azure/architecture/patterns/event-sourcing)

### Pattern consigliati nel modulo Activity
- **Tutte le azioni critiche** (creazione, modifica, cancellazione, login, workflow, ecc.) devono generare un evento.
- **Gli eventi** devono essere persistiti in una event store dedicata (tabella `stored_events`).
- **Le proiezioni** devono essere idempotenti e aggiornare viste/materialized views ottimizzate per la lettura.
- **Gli aggregate** devono essere usati per logiche di business complesse e per garantire la coerenza tra eventi correlati.
- **Audit trail**: ogni evento deve essere tracciabile, con metadati (utente, timestamp, contesto, IP, ecc.).
- **Replay**: prevedere comandi/artisan per il replay degli eventi e la rigenerazione delle proiezioni.

### Esempio di flusso (semplificato)
1. L'utente aggiorna il proprio profilo → viene generato un evento `UserProfileUpdated`.
2. L'evento viene persistito nella tabella `stored_events`.
3. Un **projector** aggiorna la tabella `user_profiles` per la lettura rapida.
4. Un **aggregate** può validare regole di business (es. limiti, workflow, ecc.).
5. Tutti gli eventi sono disponibili per audit, analytics, debugging.

### Best Practice
- **Non usare eventi solo per logging**: ogni evento deve rappresentare un cambiamento di stato rilevante.
- **Proiezioni idempotenti**: ogni evento deve poter essere rigiocato più volte senza effetti collaterali.
- **Test**: scrivi test per eventi, aggregate e proiezioni.
- **Documenta** ogni evento e proiezione in `/docs/event-sourcing.md`.
- **Collega** ogni evento a una user story o requisito di business.

### Collegamenti correlati
- [Event Sourcing & Proiezioni](./event-sourcing.md)
- [Struttura del Modulo](./structure.md)
- [Roadmap](./roadmap.md)
- [Bottlenecks](./bottlenecks.md)
- [Modulo Xot](../../Xot/docs/README.md)
- [Spatie Event Sourcing Docs](https://docs.spatie.be/laravel-event-sourcing/v7/introduction)
- [Microsoft Event Sourcing Pattern](https://docs.microsoft.com/en-us/azure/architecture/patterns/event-sourcing)

---

## Collegamenti Bidirezionali (aggiornati)
- [README Activity](./README.md)
- [structure.md](./structure.md)
- [roadmap.md](./roadmap.md)
- [bottlenecks.md](./bottlenecks.md)
- [phpstan_fixes.md](./phpstan_fixes.md)
- [filament.md](./filament.md)
- [lang-link.md](./lang-link.md)
- [translations.md](./translations.md)
- [ACTIVITY_EVENT_SOURCING_BEST_PRACTICES.mdc](../../.cursor/rules/ACTIVITY_EVENT_SOURCING_BEST_PRACTICES.mdc)

> **Nota:** Aggiornare sempre questa sezione quando si aggiungono nuove regole, pattern o documenti tecnici relativi a event sourcing, aggregate, projector, CQRS, ecc.

---

## Vedi Anche

- [Modulo Xot](../Xot/docs/README.md) - Modulo base e linee guida generali
- [Modulo User](../User/docs/README.md) - Gestione utenti e permessi
- [Modulo Lang](../Lang/docs/README.md) - Gestione traduzioni
- [Convenzioni di Naming](../../../docs/standards/file_naming_conventions.md) - Standard per la nomenclatura dei file

---

## Scopo della modifica
- Migliorare l'analisi statica e la leggibilità aggiungendo il type hint `Blueprint $table` e un docblock esplicativo nelle closure delle migrazioni.
- [Documentazione principale](/docs/README.md)
>>>>>>> 4cc7e15 (.)

## Riferimenti e fonti esterne
- [spatie/laravel-event-sourcing](https://github.com/spatie/laravel-event-sourcing)
- [spatie/larabank-traditional](https://github.com/spatie/larabank-traditional)
- [spatie/larabank-event-projector](https://github.com/spatie/larabank-event-projector)
- [spatie/larabank-event-projector-aggregates](https://github.com/spatie/larabank-event-projector-aggregates)
- [spatie/laravel-event-projector-demo-app](https://github.com/spatie/laravel-event-projector-demo-app)
- [spatie/laravel-event-projector](https://github.com/spatie/laravel-event-projector)
- [Microsoft Event Sourcing Pattern](https://docs.microsoft.com/en-us/azure/architecture/patterns/event-sourcing)
- [Spatie Event Projector Docs](https://docs.spatie.be/laravel-event-projector/v1/introduction)

<<<<<<< HEAD
## Collegamenti tra versioni di readme.md
* [readme.md](laravel/Modules/Gdpr/docs/readme.md)
* [readme.md](laravel/Modules/UI/docs/readme.md)
* [readme.md](laravel/Modules/Lang/docs/readme.md)
* [readme.md](laravel/Modules/Activity/docs/readme.md)
* [readme.md](laravel/Modules/Cms/docs/readme.md)
=======
> **Nota metodologica:**
> Tutte le best practice, pattern e strategie sono state integrate nella documentazione e nei file .mdc dopo un'analisi comparata delle fonti sopra elencate, discussione critica e adattamento alle esigenze del progetto saluteora.
>>>>>>> 4cc7e15 (.)

