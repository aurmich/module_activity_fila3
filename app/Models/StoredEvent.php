<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent;

/**
 * Classe StoredEvent.
 * 
 * Rappresenta un evento memorizzato nel modulo Activity.
 * Estende il modello EloquentStoredEvent di Spatie per la gestione degli eventi.
 *
 * @property int $id
 * @property string|null $aggregate_uuid UUID dell'aggregato
 * @property int|null $aggregate_version Versione dell'aggregato
 * @property int $event_version Versione dell'evento
 * @property string $event_class Classe dell'evento
 * @property array<array-key, mixed> $event_properties Proprietà dell'evento
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $meta_data Metadati dell'evento
 * @property string $created_at Data di creazione
 * @property string|null $updated_by Aggiornato da
 * @property string|null $created_by Creato da
 * @property-read \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event Istanza dell'evento
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent afterVersion(int $version) Filtra per versione successiva
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<EloquentStoredEvent> all() Ottiene tutti gli eventi
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<EloquentStoredEvent> get() Ottiene gli eventi
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent lastEvent(string ...$eventClasses) Ottiene l'ultimo evento
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent newModelQuery()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent newQuery()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent query()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent startingFrom(int $storedEventId) Filtra da un ID specifico
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereAggregateRoot(string $uuid) Filtra per UUID dell'aggregato
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereAggregateUuid($value) Filtra per UUID dell'aggregato
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereAggregateVersion($value) Filtra per versione dell'aggregato
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereCreatedAt($value) Filtra per data di creazione
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereCreatedBy($value) Filtra per creatore
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereEvent(string ...$eventClasses) Filtra per classe evento
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereEventClass($value) Filtra per classe evento
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereEventProperties($value) Filtra per proprietà evento
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereEventVersion($value) Filtra per versione evento
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereId($value) Filtra per ID
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereMetaData($value) Filtra per metadati
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent wherePropertyIs(string $property, ?mixed $value) Filtra per proprietà specifica
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent wherePropertyIsNot(string $property, ?mixed $value) Filtra per proprietà diversa
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent whereUpdatedBy($value) Filtra per aggiornatore
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder<static>|StoredEvent withMetaDataAttributes() Carica gli attributi dei metadati
 * @mixin \Eloquent
 */
class StoredEvent extends EloquentStoredEvent
{
    /**
     * Nome della tabella nel database.
     *
     * @var string
     */
    protected $table = 'stored_events';

    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'aggregate_uuid',
        'aggregate_version',
        'event_version',
        'event_class',
        'event_properties',
        'meta_data',
        'created_at',
        'updated_by',
        'created_by',
    ];

    /**
     * Nome della connessione al database.
     *
     * @var string
     */
    protected $connection = 'activity';
}
