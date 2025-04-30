# Traduzioni del Modulo Activity

## Collegamenti

- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale sulle traduzioni
- [Regole Generali Traduzioni](../../Xot/docs/translations.md)

## Struttura

```
Modules/Activity/
└── lang/
    ├── it/
    │   └── activity.php
    └── en/
        └── activity.php
```

## Contenuto

Il file `activity.php` contiene le traduzioni per:
- Log attività
- Eventi di sistema
- Azioni utente
- Notifiche attività
- Filtri attività
- Report attività
- Timeline
- Statistiche
- Esportazione dati
- Configurazione attività

## Esempi

```php
return [
    'logs' => [
        'label' => 'Log Attività',
        'tooltip' => 'Visualizza il registro delle attività'
    ],
    'events' => [
        'label' => 'Eventi',
        'tooltip' => 'Gestisci gli eventi di sistema'
    ],
    'notifications' => [
        'label' => 'Notifiche',
        'tooltip' => 'Configura le notifiche attività'
    ],
    'reports' => [
        'label' => 'Report',
        'tooltip' => 'Genera report sulle attività'
    ]
];
``` 