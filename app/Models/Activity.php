<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

/**
<<<<<<< HEAD
 * Class Activity.
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> origin/dev
>>>>>>> ecd5971 (.)
 * This class extends the BaseActivity model to represent activities in the application.
 *
 * @property int $id
 * @property string|null $log_name
 * @property string $description
 * @property string|null $subject_type
 * @property int|null $subject_id
 * @property string|null $causer_type
 * @property string $causer_id
 * @property \Illuminate\Support\Collection<array-key, mixed>|null $properties
 * @property string|null $batch_uuid
 * @property string|null $event
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $causer
<<<<<<< HEAD
 * @property-read \Illuminate\Support\Collection<int, mixed> $changes
=======
<<<<<<< HEAD
 * @property-read \Illuminate\Support\Collection $changes
=======
 * @property-read \Illuminate\Support\Collection<int, mixed> $changes
>>>>>>> origin/dev
>>>>>>> ecd5971 (.)
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent|null $subject
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity forBatch(string $batchUuid)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity forEvent(string $event)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity hasBatch()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity inLog(...$logNames)
=======
 * Classe Activity.
 *
 * Questa classe estende il modello BaseActivity per rappresentare le attività nell'applicazione.
 * Gestisce il tracciamento delle attività degli utenti e delle modifiche ai modelli.
 *
 * @property int $id
 * @property string|null $log_name Nome del log
 * @property string $description Descrizione dell'attività
 * @property string|null $subject_type Tipo del soggetto
 * @property int|null $subject_id ID del soggetto
 * @property string|null $causer_type Tipo dell'autore
 * @property string $causer_id ID dell'autore
 * @property \Illuminate\Support\Collection<array-key, mixed>|null $properties Proprietà dell'attività
 * @property string|null $batch_uuid UUID del batch
 * @property string|null $event Nome dell'evento
 * @property \Illuminate\Support\Carbon|null $created_at Data di creazione
 * @property \Illuminate\Support\Carbon|null $updated_at Data di aggiornamento
 * @property string|null $updated_by Aggiornato da
 * @property string|null $created_by Creato da
 * @property string|null $deleted_at Data di eliminazione
 * @property string|null $deleted_by Eliminato da
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $causer Autore dell'attività
 * @property-read \Illuminate\Support\Collection<int, mixed> $changes Modifiche apportate
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent|null $subject Soggetto dell'attività
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer) Filtra per autore
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity forBatch(string $batchUuid) Filtra per batch
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity forEvent(string $event) Filtra per evento
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject) Filtra per soggetto
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity hasBatch() Filtra per presenza di batch
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity inLog(...$logNames) Filtra per log
>>>>>>> cc965c3 (.)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereBatchUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereCauserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereCauserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereLogName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Activity extends BaseActivity
{
    /** 
     * Campi che possono essere assegnati in massa.
     * 
     * @var list<string> 
     */
    protected $fillable = [
        'id',
        'log_name',
        'description',
        'subject_type',
        'event',
        'subject_id',
        'causer_type',
        'causer_id',
        'properties',
        'batch_uuid',
        'created_at',
        'updated_at',
    ];

    /**
     * Nome della connessione al database.
     */
    protected $connection = 'activity';

    // Additional methods or relationships can be defined here as needed
}
