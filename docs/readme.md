<<<<<<< HEAD
<<<<<<< HEAD
# Jigsaw Docs Starter Template
=======
# Modulo Activity - Documentazione
>>>>>>> fd6d6c2 (.)

## Panoramica
Il modulo Activity gestisce il tracciamento delle attività e degli eventi all'interno dell'applicazione Laravel, fornendo un sistema completo per monitorare le azioni degli utenti e i cambiamenti di stato.

## Funzionalità Principali
- **Tracciamento Eventi**: Registrazione automatica di eventi di sistema
- **Log Utente**: Tracciamento delle azioni degli utenti
- **Audit Trail**: Cronologia completa delle modifiche
- **Notifiche**: Integrazione con il sistema di notifiche
- **Dashboard**: Visualizzazione delle attività in tempo reale

## Architettura

### Modelli Principali
- `Activity`: Modello principale per le attività
- `ActivityType`: Tipi di attività predefiniti
- `ActivityLog`: Log dettagliati delle attività

### Eventi
- `ActivityCreated`: Evento generato quando viene creata un'attività
- `ActivityUpdated`: Evento generato quando viene aggiornata un'attività
- `ActivityDeleted`: Evento generato quando viene eliminata un'attività

## Implementazione

### Configurazione
```php
// config/activity.php
return [
    'enabled' => env('ACTIVITY_ENABLED', true),
    'log_events' => [
        'user_login',
        'user_logout',
        'model_created',
        'model_updated',
        'model_deleted',
    ],
    'prune_after_days' => 90,
];
```

### Utilizzo Base
```php
use Modules\Activity\Models\Activity;

// Creare un'attività
Activity::create([
    'user_id' => auth()->id(),
    'type' => 'user_login',
    'description' => 'User logged in',
    'properties' => ['ip' => request()->ip()],
]);
```

### Tracciamento Automatico
```php
// Nel modello
use Modules\Activity\Traits\LogsActivity;

<<<<<<< HEAD
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
# Modulo Activity - Documentazione

## Panoramica
Il modulo Activity gestisce il tracciamento delle attività e degli eventi all'interno dell'applicazione Laravel, fornendo un sistema completo per monitorare le azioni degli utenti e i cambiamenti di stato.

## Funzionalità Principali
- **Tracciamento Eventi**: Registrazione automatica di eventi di sistema
- **Log Utente**: Tracciamento delle azioni degli utenti
- **Audit Trail**: Cronologia completa delle modifiche
- **Notifiche**: Integrazione con il sistema di notifiche
- **Dashboard**: Visualizzazione delle attività in tempo reale

## Architettura

### Modelli Principali
- `Activity`: Modello principale per le attività
- `ActivityType`: Tipi di attività predefiniti
- `ActivityLog`: Log dettagliati delle attività

### Eventi
- `ActivityCreated`: Evento generato quando viene creata un'attività
- `ActivityUpdated`: Evento generato quando viene aggiornata un'attività
- `ActivityDeleted`: Evento generato quando viene eliminata un'attività

## Implementazione

### Configurazione
```php
// config/activity.php
return [
    'enabled' => env('ACTIVITY_ENABLED', true),
    'log_events' => [
        'user_login',
        'user_logout',
        'model_created',
        'model_updated',
        'model_deleted',
    ],
    'prune_after_days' => 90,
];
```

### Utilizzo Base
```php
use Modules\Activity\Models\Activity;

// Creare un'attività
Activity::create([
    'user_id' => auth()->id(),
    'type' => 'user_login',
    'description' => 'User logged in',
    'properties' => ['ip' => request()->ip()],
]);
```

### Tracciamento Automatico
```php
// Nel modello
use Modules\Activity\Traits\LogsActivity;

class User extends Authenticatable
{
    use LogsActivity;
    
    protected static $logAttributes = ['name', 'email'];
    protected static $logOnlyDirty = true;
}
```

=======
class User extends Authenticatable
{
    use LogsActivity;
    
    protected static $logAttributes = ['name', 'email'];
    protected static $logOnlyDirty = true;
}
```

>>>>>>> fd6d6c2 (.)
## API Endpoints

### GET /api/activities
Recupera la lista delle attività con paginazione.

### GET /api/activities/{id}
Recupera i dettagli di un'attività specifica.

### POST /api/activities
Crea una nuova attività.

### DELETE /api/activities/{id}
Elimina un'attività (soft delete).

## Dashboard Filament

### Widget Disponibili
- `ActivityOverviewWidget`: Panoramica delle attività
- `RecentActivityWidget`: Attività recenti
- `ActivityChartWidget`: Grafico delle attività nel tempo

### Risorse Filament
- `ActivityResource`: Gestione completa delle attività
- `ActivityTypeResource`: Gestione dei tipi di attività

## Best Practices

### Performance
- Utilizzare indici appropriati sui campi più consultati
- Implementare pulizia automatica dei log vecchi
- Utilizzare queue per attività asincrone

### Sicurezza
- Validare sempre i dati in input
- Implementare controlli di autorizzazione
- Loggare solo informazioni non sensibili

### Manutenzione
- Pulire regolarmente i log vecchi
- Monitorare la dimensione del database
- Backup periodici dei dati di attività

## Collegamenti

- [Architettura](./architecture.md)
- [API Documentation](./api.md)
- [Filament Resources](./filament-resources.md)
- [Testing](./testing.md)
- [Deployment](./deployment.md)

*Ultimo aggiornamento: gennaio 2025*
<<<<<<< HEAD
>>>>>>> c30c35c (.)
=======
>>>>>>> fd6d6c2 (.)

