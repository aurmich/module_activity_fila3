<?php

return [
    'navigation' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'name' => 'Eventi Archiviati',
        'plural' => 'Eventi Archiviati',
        'group' => [
            'name' => 'Monitoraggio',
            'description' => 'Gestione degli eventi di sistema archiviati',
        ],
        'label' => 'Eventi Archiviati',
=======
=======
>>>>>>> 1262d72 (.)
        'name' => 'Stored Events',
        'plural' => 'Stored Events',
        'group' => [
            'name' => 'Monitoring',
            'description' => 'Management of stored system events',
        ],
        'label' => 'Stored Events',
<<<<<<< HEAD
>>>>>>> df84417 (.)
=======
>>>>>>> 1262d72 (.)
        'sort' => '62',
        'icon' => 'activity-stored-event-animated',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Identificativo unico dell\'evento archiviato',
            'validation' => 'required|integer|min:1',
        ],
        'event_class' => [
            'label' => 'Classe Evento',
            'placeholder' => 'Inserisci la classe dell\'evento',
            'help' => 'Nome completo della classe che rappresenta l\'evento',
=======
=======
>>>>>>> 1262d72 (.)
            'help' => 'Unique identifier of the stored event',
            'validation' => 'required|integer|min:1',
        ],
        'event_class' => [
            'label' => 'Event Class',
            'placeholder' => 'Enter the event class',
            'help' => 'Full name of the class that represents the event',
<<<<<<< HEAD
>>>>>>> df84417 (.)
=======
>>>>>>> 1262d72 (.)
            'validation' => 'required|string|max:255',
            'searchable' => '1',
        ],
        'event_properties' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Proprietà Evento',
            'placeholder' => 'Proprietà dell\'evento',
            'help' => 'Dati e proprietà specifiche dell\'evento',
=======
            'label' => 'Event Properties',
            'placeholder' => 'Event properties',
            'help' => 'Specific data and properties of the event',
>>>>>>> df84417 (.)
=======
            'label' => 'Event Properties',
            'placeholder' => 'Event properties',
            'help' => 'Specific data and properties of the event',
>>>>>>> 1262d72 (.)
            'validation' => 'required|json',
            'type' => 'json',
            'format' => 'json',
        ],
        'aggregate_uuid' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'UUID Aggregato',
            'placeholder' => 'UUID dell\'aggregato',
            'help' => 'Identificativo unico dell\'aggregato di appartenenza',
=======
            'label' => 'Aggregate UUID',
            'placeholder' => 'Aggregate UUID',
            'help' => 'Unique identifier of the related aggregate',
>>>>>>> df84417 (.)
=======
            'label' => 'Aggregate UUID',
            'placeholder' => 'Aggregate UUID',
            'help' => 'Unique identifier of the related aggregate',
>>>>>>> 1262d72 (.)
            'validation' => 'required|uuid',
            'searchable' => '1',
        ],
        'aggregate_version' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Versione Aggregato',
            'placeholder' => 'Inserisci la versione',
            'help' => 'Numero di versione dell\'aggregato',
=======
            'label' => 'Aggregate Version',
            'placeholder' => 'Enter version',
            'help' => 'Version number of the aggregate',
>>>>>>> df84417 (.)
=======
            'label' => 'Aggregate Version',
            'placeholder' => 'Enter version',
            'help' => 'Version number of the aggregate',
>>>>>>> 1262d72 (.)
            'validation' => 'required|integer|min:1',
            'sortable' => '1',
        ],
        'event_version' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Versione Evento',
            'placeholder' => 'Versione dell\'evento',
            'help' => 'Numero di versione del formato evento',
=======
            'label' => 'Event Version',
            'placeholder' => 'Event version',
            'help' => 'Version number of the event format',
>>>>>>> df84417 (.)
=======
            'label' => 'Event Version',
            'placeholder' => 'Event version',
            'help' => 'Version number of the event format',
>>>>>>> 1262d72 (.)
            'validation' => 'nullable|string|max:20',
        ],
        'meta_data' => [
            'label' => 'Metadata',
<<<<<<< HEAD
<<<<<<< HEAD
            'placeholder' => 'Metadata aggiuntivi',
            'help' => 'Informazioni metadata aggiuntive sull\'evento',
=======
            'placeholder' => 'Additional metadata',
            'help' => 'Additional metadata information about the event',
>>>>>>> df84417 (.)
=======
            'placeholder' => 'Additional metadata',
            'help' => 'Additional metadata information about the event',
>>>>>>> 1262d72 (.)
            'validation' => 'nullable|json',
            'type' => 'json',
            'format' => 'json',
        ],
        'created_at' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Data Creazione',
            'placeholder' => 'Seleziona data e ora',
            'help' => 'Timestamp di quando l\'evento è stato creato',
=======
            'label' => 'Creation Date',
            'placeholder' => 'Select date and time',
            'help' => 'Timestamp of when the event was created',
>>>>>>> df84417 (.)
=======
            'label' => 'Creation Date',
            'placeholder' => 'Select date and time',
            'help' => 'Timestamp of when the event was created',
>>>>>>> 1262d72 (.)
            'validation' => 'required|date',
            'format' => 'd/m/Y H:i:s',
            'sortable' => '1',
        ],
        'created_by' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Creato Da',
            'placeholder' => 'Utente creatore',
            'help' => 'Utente che ha generato l\'evento',
=======
            'label' => 'Created By',
            'placeholder' => 'Creating user',
            'help' => 'User who generated the event',
>>>>>>> df84417 (.)
=======
            'label' => 'Created By',
            'placeholder' => 'Creating user',
            'help' => 'User who generated the event',
>>>>>>> 1262d72 (.)
            'validation' => 'nullable|integer|exists:users,id',
            'searchable' => '1',
        ],
        'updated_by' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Aggiornato Da',
            'placeholder' => 'Utente aggiornatore',
            'help' => 'Utente che ha aggiornato l\'evento',
            'validation' => 'nullable|integer|exists:users,id',
        ],
        'stream_name' => [
            'label' => 'Nome Stream',
            'placeholder' => 'Nome del flusso di eventi',
            'help' => 'Identificativo del flusso a cui appartiene l\'evento',
=======
=======
>>>>>>> 1262d72 (.)
            'label' => 'Updated By',
            'placeholder' => 'Updating user',
            'help' => 'User who updated the event',
            'validation' => 'nullable|integer|exists:users,id',
        ],
        'stream_name' => [
            'label' => 'Stream Name',
            'placeholder' => 'Event stream name',
            'help' => 'Identifier of the stream the event belongs to',
<<<<<<< HEAD
>>>>>>> df84417 (.)
=======
>>>>>>> 1262d72 (.)
            'validation' => 'nullable|string|max:255',
            'searchable' => '1',
        ],
        'stream_position' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Posizione Stream',
            'placeholder' => 'Posizione nel flusso',
            'help' => 'Posizione sequenziale dell\'evento nel flusso',
=======
            'label' => 'Stream Position',
            'placeholder' => 'Position in stream',
            'help' => 'Sequential position of the event in the stream',
>>>>>>> df84417 (.)
=======
            'label' => 'Stream Position',
            'placeholder' => 'Position in stream',
            'help' => 'Sequential position of the event in the stream',
>>>>>>> 1262d72 (.)
            'validation' => 'nullable|integer|min:0',
            'sortable' => '1',
        ],
        'toggleColumns' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Mostra/Nascondi Colonne',
            'placeholder' => '',
            'help' => 'Configura la visibilità delle colonne nella tabella',
=======
            'label' => 'Show/Hide Columns',
            'placeholder' => '',
            'help' => 'Configure column visibility in the table',
>>>>>>> df84417 (.)
=======
            'label' => 'Show/Hide Columns',
            'placeholder' => '',
            'help' => 'Configure column visibility in the table',
>>>>>>> 1262d72 (.)
        ],
    ],
    'filters' => [
        'event_class' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Classe Evento',
            'placeholder' => 'Filtra per classe',
            'help' => 'Filtra gli eventi per tipo di classe',
=======
            'label' => 'Event Class',
            'placeholder' => 'Filter by class',
            'help' => 'Filter events by class type',
>>>>>>> df84417 (.)
=======
            'label' => 'Event Class',
            'placeholder' => 'Filter by class',
            'help' => 'Filter events by class type',
>>>>>>> 1262d72 (.)
            'type' => 'select',
            'searchable' => '1',
            'multiple' => '1',
        ],
        'aggregate_uuid' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'UUID Aggregato',
            'placeholder' => 'Filtra per aggregato',
            'help' => 'Filtra gli eventi per UUID aggregato',
=======
            'label' => 'Aggregate UUID',
            'placeholder' => 'Filter by aggregate',
            'help' => 'Filter events by aggregate UUID',
>>>>>>> df84417 (.)
=======
            'label' => 'Aggregate UUID',
            'placeholder' => 'Filter by aggregate',
            'help' => 'Filter events by aggregate UUID',
>>>>>>> 1262d72 (.)
            'type' => 'text',
            'validation' => 'nullable|uuid',
        ],
        'aggregate_version_range' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Range Versione Aggregato',
            'placeholder' => 'Da versione - A versione',
            'help' => 'Filtra per range di versioni dell\'aggregato',
            'type' => 'number_range',
        ],
        'date_range' => [
            'label' => 'Intervallo Date',
            'placeholder' => 'Seleziona intervallo',
            'help' => 'Filtra gli eventi per periodo di tempo',
            'type' => 'date_range',
            'presets' => [
                'last_hour' => 'Ultima ora',
                'today' => 'Oggi',
                'yesterday' => 'Ieri',
                'last_7_days' => 'Ultimi 7 giorni',
                'last_30_days' => 'Ultimi 30 giorni',
                'this_month' => 'Questo mese',
                'last_month' => 'Mese scorso',
            ],
        ],
        'stream_name' => [
            'label' => 'Nome Stream',
            'placeholder' => 'Filtra per stream',
            'help' => 'Filtra per nome del flusso di eventi',
=======
=======
>>>>>>> 1262d72 (.)
            'label' => 'Aggregate Version Range',
            'placeholder' => 'From version - To version',
            'help' => 'Filter by aggregate version range',
            'type' => 'number_range',
        ],
        'date_range' => [
            'label' => 'Date Range',
            'placeholder' => 'Select range',
            'help' => 'Filter events by time period',
            'type' => 'date_range',
            'presets' => [
                'last_hour' => 'Last hour',
                'today' => 'Today',
                'yesterday' => 'Yesterday',
                'last_7_days' => 'Last 7 days',
                'last_30_days' => 'Last 30 days',
                'this_month' => 'This month',
                'last_month' => 'Last month',
            ],
        ],
        'stream_name' => [
            'label' => 'Stream Name',
            'placeholder' => 'Filter by stream',
            'help' => 'Filter by event stream name',
<<<<<<< HEAD
>>>>>>> df84417 (.)
=======
>>>>>>> 1262d72 (.)
            'type' => 'select',
            'searchable' => '1',
        ],
        'created_by' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Creato Da',
            'placeholder' => 'Filtra per utente',
            'help' => 'Filtra per utente creatore',
=======
            'label' => 'Created By',
            'placeholder' => 'Filter by user',
            'help' => 'Filter by creating user',
>>>>>>> df84417 (.)
=======
            'label' => 'Created By',
            'placeholder' => 'Filter by user',
            'help' => 'Filter by creating user',
>>>>>>> 1262d72 (.)
            'type' => 'select',
            'searchable' => '1',
        ],
    ],
    'actions' => [
        'view' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Visualizza',
            'success' => 'Evento caricato con successo',
            'error' => 'Errore nel caricamento dell\'evento',
        ],
        'view_json' => [
            'label' => 'Visualizza JSON',
            'icon' => 'heroicon-o-code-bracket',
            'color' => 'info',
            'success' => 'Dati JSON caricati con successo',
            'error' => 'Errore nel caricamento dei dati JSON',
        ],
        'replay' => [
            'label' => 'Replay Evento',
            'success' => 'Replay dell\'evento completato con successo',
            'error' => 'Errore durante il replay dell\'evento',
            'confirmation' => 'Sei sicuro di voler eseguire il replay di questo evento?',
            'requires_permission' => 'events.replay',
        ],
        'replay_from' => [
            'label' => 'Replay da Questo Evento',
            'icon' => 'heroicon-o-play',
            'color' => 'warning',
            'success' => 'Replay degli eventi avviato con successo',
            'error' => 'Errore durante l\'avvio del replay',
            'confirmation' => 'Vuoi eseguire il replay di tutti gli eventi a partire da questo? Operazione potenzialmente impattante.',
            'requires_permission' => 'events.replay_from',
        ],
        'export' => [
            'label' => 'Esporta Eventi',
            'success' => 'Eventi esportati con successo',
            'error' => 'Errore durante l\'esportazione',
            'confirmation' => 'Vuoi esportare gli eventi selezionati?',
        ],
        'snapshot_create' => [
            'label' => 'Crea Snapshot',
            'icon' => 'heroicon-o-camera',
            'color' => 'primary',
            'success' => 'Snapshot creato con successo',
            'error' => 'Errore nella creazione dello snapshot',
            'confirmation' => 'Vuoi creare uno snapshot dell\'aggregato a questo punto?',
            'requires_permission' => 'events.snapshot',
        ],
        'bulk_replay' => [
            'label' => 'Replay Multiplo',
            'icon' => 'heroicon-o-forward',
            'color' => 'danger',
            'success' => 'Replay multiplo completato',
            'error' => 'Errore durante il replay multiplo',
            'confirmation' => 'ATTENZIONE: Vuoi eseguire il replay di tutti gli eventi selezionati? Questa è un\'operazione critica.',
=======
=======
>>>>>>> 1262d72 (.)
            'label' => 'View',
            'success' => 'Event loaded successfully',
            'error' => 'Error loading event',
        ],
        'view_json' => [
            'label' => 'View JSON',
            'icon' => 'heroicon-o-code-bracket',
            'color' => 'info',
            'success' => 'JSON data loaded successfully',
            'error' => 'Error loading JSON data',
        ],
        'replay' => [
            'label' => 'Replay Evento',
            'success' => 'Event replay completed successfully',
            'error' => 'Error during event replay',
            'confirmation' => 'Are you sure you want to replay this event?',
            'requires_permission' => 'events.replay',
        ],
        'replay_from' => [
            'label' => 'Replay From This Event',
            'icon' => 'heroicon-o-play',
            'color' => 'warning',
            'success' => 'Event replay started successfully',
            'error' => 'Error starting replay',
            'confirmation' => 'Do you want to replay all events starting from this one? Potentially impactful operation.',
            'requires_permission' => 'events.replay_from',
        ],
        'export' => [
            'label' => 'Export Events',
            'success' => 'Events exported successfully',
            'error' => 'Error during export',
            'confirmation' => 'Do you want to export the selected events?',
        ],
        'snapshot_create' => [
            'label' => 'Create Snapshot',
            'icon' => 'heroicon-o-camera',
            'color' => 'primary',
            'success' => 'Snapshot created successfully',
            'error' => 'Error creating snapshot',
            'confirmation' => 'Do you want to create a snapshot of the aggregate at this point?',
            'requires_permission' => 'events.snapshot',
        ],
        'bulk_replay' => [
            'label' => 'Bulk Replay',
            'icon' => 'heroicon-o-forward',
            'color' => 'danger',
            'success' => 'Bulk replay completed',
            'error' => 'Error during bulk replay',
            'confirmation' => 'WARNING: Do you want to replay all selected events? This is a critical operation.',
<<<<<<< HEAD
>>>>>>> df84417 (.)
=======
>>>>>>> 1262d72 (.)
            'requires_permission' => 'events.bulk_replay',
        ],
    ],
    'messages' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'no_events' => 'Nessun evento trovato',
        'event_replayed' => 'Evento riprodotto con successo',
        'events_exported' => 'Eventi esportati con successo',
        'loading' => 'Caricamento eventi in corso...',
        'error_loading' => 'Errore nel caricamento degli eventi',
        'snapshot_created' => 'Snapshot creato con successo',
        'empty_state' => [
            'title' => 'Nessun evento archiviato',
            'description' => 'Non ci sono eventi archiviati nel sistema. Gli eventi appariranno qui quando verranno generati e archiviati.',
        ],
        'replay_warning' => 'Il replay degli eventi può modificare lo stato del sistema. Procedi con cautela.',
=======
=======
>>>>>>> 1262d72 (.)
        'no_events' => 'No events found',
        'event_replayed' => 'Event replayed successfully',
        'events_exported' => 'Events exported successfully',
        'loading' => 'Loading events...',
        'error_loading' => 'Error loading events',
        'snapshot_created' => 'Snapshot created successfully',
        'empty_state' => [
            'title' => 'No stored events',
            'description' => 'There are no events stored in the system. Events will appear here when they are generated and stored.',
        ],
        'replay_warning' => 'Event replay can modify the system state. Proceed with caution.',
<<<<<<< HEAD
>>>>>>> df84417 (.)
=======
>>>>>>> 1262d72 (.)
    ],
    'export' => [
        'formats' => [
            'json' => [
                'label' => 'JSON',
                'mime_type' => 'application/json',
                'extension' => 'json',
                'icon' => 'heroicon-o-code-bracket',
            ],
            'csv' => [
                'label' => 'CSV',
                'mime_type' => 'text/csv',
                'extension' => 'csv',
                'icon' => 'heroicon-o-document-text',
            ],
            'excel' => [
                'label' => 'Excel',
                'mime_type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'extension' => 'xlsx',
                'icon' => 'heroicon-o-table-cells',
            ],
        ],
        'columns' => [
            'id' => [
                'label' => 'ID',
                'sortable' => '1',
            ],
            'created_at' => [
                'label' => 'Data',
                'format' => 'd/m/Y H:i:s',
                'sortable' => '1',
            ],
            'event_class' => [
                'label' => 'Classe',
                'sortable' => '1',
            ],
            'aggregate_uuid' => [
                'label' => 'UUID Aggregato',
                'sortable' => '',
            ],
            'aggregate_version' => [
                'label' => 'Versione',
                'sortable' => '1',
            ],
            'stream_name' => [
                'label' => 'Stream',
                'sortable' => '1',
            ],
            'stream_position' => [
                'label' => 'Posizione',
                'sortable' => '1',
            ],
        ],
<<<<<<< HEAD
<<<<<<< HEAD
        'filename_pattern' => 'eventi_archiviati_{date}_{time}',
=======
        'filename_pattern' => 'stored_events_{date}_{time}',
>>>>>>> df84417 (.)
=======
        'filename_pattern' => 'stored_events_{date}_{time}',
>>>>>>> 1262d72 (.)
        'max_records' => '50000',
        'include_properties' => '',
    ],
    'permissions' => [
        'view' => 'stored_events.view',
        'create' => 'stored_events.create',
        'update' => 'stored_events.update',
        'delete' => 'stored_events.delete',
        'export' => 'stored_events.export',
        'replay' => 'stored_events.replay',
        'replay_from' => 'stored_events.replay_from',
        'bulk_replay' => 'stored_events.bulk_replay',
        'snapshot' => 'stored_events.snapshot',
    ],
    'pagination' => [
        'per_page' => '50',
        'options' => [
            '0' => '25',
            '1' => '50',
            '2' => '100',
            '3' => '200',
        ],
        'simple' => '',
    ],
    'cache' => [
        'ttl' => '600',
        'tags' => [
            '0' => 'stored_events',
            '1' => 'event_sourcing',
            '2' => 'monitoring',
        ],
    ],
    'event_sourcing' => [
        'replay_batch_size' => '100',
        'snapshot_frequency' => '1000',
        'retention_days' => '2555',
        'stream_patterns' => [
            'user' => 'user-{uuid}',
            'order' => 'order-{uuid}',
            'payment' => 'payment-{uuid}',
        ],
    ],
    'monitoring' => [
        'alert_on_replay_errors' => '1',
        'alert_on_missing_events' => '1',
        'performance_tracking' => '1',
        'audit_trail' => '1',
    ],
];
