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

## Collegamenti

<<<<<<< Updated upstream
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

# compile assets with Laravel Mix
# options: dev, prod
npm run dev
```

## Collegamenti tra versioni di readme.md
* [readme.md](laravel/Modules/Gdpr/docs/readme.md)
* [readme.md](laravel/Modules/UI/docs/readme.md)
* [readme.md](laravel/Modules/Lang/docs/readme.md)
* [readme.md](laravel/Modules/Activity/docs/readme.md)
* [readme.md](laravel/Modules/Cms/docs/readme.md)

=======
- [Documentazione PHPStan generale](/docs/phpstan.md)
- [Problemi e soluzioni PHPStan](/docs/phpstan/problemi_e_soluzioni.md) 
>>>>>>> Stashed changes
