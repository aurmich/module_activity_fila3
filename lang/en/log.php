<?php

return [
    'navigation' => [
        'name' => 'Log',
        'plural' => 'Log',
        'group' => [
<<<<<<< HEAD
            'name' => 'Monitoraggio',
            'description' => 'Gestione dei log di sistema',
=======
            'name' => 'Monitoring',
            'description' => 'System log management',
>>>>>>> df84417 (.)
        ],
        'label' => 'Log',
        'sort' => '61',
        'icon' => 'activity-log-animated',
    ],
    'fields' => [
        'level' => [
<<<<<<< HEAD
            'label' => 'Livello',
=======
            'label' => 'Level',
>>>>>>> df84417 (.)
            'emergency' => 'Emergency',
            'alert' => 'Alert',
            'critical' => 'Critical',
            'error' => 'Error',
            'warning' => 'Warning',
            'notice' => 'Notice',
            'info' => 'Info',
            'debug' => 'Debug',
        ],
<<<<<<< HEAD
        'message' => 'Messaggio',
        'context' => [
            'label' => 'Contesto',
            'exception' => 'Eccezione',
            'stack_trace' => 'Stack Trace',
            'additional' => 'Info Aggiuntive',
        ],
        'channel' => [
            'label' => 'Canale',
            'system' => 'Sistema',
            'application' => 'Applicazione',
            'security' => 'Sicurezza',
            'database' => 'Database',
            'queue' => 'Code',
        ],
        'datetime' => 'Data e Ora',
        'environment' => 'Ambiente',
    ],
    'filters' => [
        'level' => 'Livello',
        'channel' => 'Canale',
        'date_range' => 'Intervallo Date',
        'environment' => 'Ambiente',
        'search' => 'Cerca nel messaggio',
    ],
    'actions' => [
        'view_details' => 'Visualizza Dettagli',
        'download' => 'Scarica',
        'clear' => 'Pulisci',
        'archive' => 'Archivia',
    ],
    'messages' => [
        'no_logs' => 'Nessun log trovato',
        'cleared' => 'Log eliminati con successo',
        'archived' => 'Log archiviati con successo',
        'downloaded' => 'File log scaricato con successo',
    ],
    'badges' => [
        'level' => [
            'emergency' => 'Emergenza',
            'alert' => 'Allerta',
            'critical' => 'Critico',
            'error' => 'Errore',
            'warning' => 'Attenzione',
            'notice' => 'Avviso',
=======
        'message' => 'Message',
        'context' => [
            'label' => 'Context',
            'exception' => 'Exception',
            'stack_trace' => 'Stack Trace',
            'additional' => 'Additional Info',
        ],
        'channel' => [
            'label' => 'Channel',
            'system' => 'System',
            'application' => 'Application',
            'security' => 'Security',
            'database' => 'Database',
            'queue' => 'Queues',
        ],
        'datetime' => 'Date and Time',
        'environment' => 'Environment',
    ],
    'filters' => [
        'level' => 'Level',
        'channel' => 'Channel',
        'date_range' => 'Date Range',
        'environment' => 'Environment',
        'search' => 'Search in message',
    ],
    'actions' => [
        'view_details' => 'View Details',
        'download' => 'Download',
        'clear' => 'Clear',
        'archive' => 'Archive',
    ],
    'messages' => [
        'no_logs' => 'No logs found',
        'cleared' => 'Logs cleared successfully',
        'archived' => 'Logs archived successfully',
        'downloaded' => 'Log file downloaded successfully',
    ],
    'badges' => [
        'level' => [
            'emergency' => 'Emergency',
            'alert' => 'Alert',
            'critical' => 'Critical',
            'error' => 'Error',
            'warning' => 'Warning',
            'notice' => 'Notice',
>>>>>>> df84417 (.)
            'info' => 'Info',
            'debug' => 'Debug',
        ],
    ],
];
