<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

/**
 * Classe Snapshot.
 *
 * Rappresenta uno snapshot di un aggregato nel sistema di event sourcing.
 * Estende il modello BaseSnapshot per la gestione degli snapshot.
 *
 * @property int $id
 * @property string $aggregate_uuid UUID dell'aggregato
 * @property int $aggregate_version Versione dell'aggregato
 * @property array $state Stato dell'aggregato
 * @property \Illuminate\Support\Carbon|null $created_at Data di creazione
 * @property \Illuminate\Support\Carbon|null $updated_at Data di aggiornamento
 * @property string|null $updated_by Aggiornato da
 * @property string|null $created_by Creato da
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot query()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot uuid(string $uuid) Filtra per UUID
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereAggregateUuid($value) Filtra per UUID dell'aggregato
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereAggregateVersion($value) Filtra per versione dell'aggregato
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereCreatedAt($value) Filtra per data di creazione
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereCreatedBy($value) Filtra per creatore
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereId($value) Filtra per ID
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereState($value) Filtra per stato
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereUpdatedAt($value) Filtra per data di aggiornamento
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereUpdatedBy($value) Filtra per aggiornatore
 * @mixin \Eloquent
 */
class Snapshot extends BaseSnapshot
{
    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'aggregate_uuid',
        'aggregate_version',
        'state',
        'created_at',
        'updated_at'
    ];

    /**
     * Nome della connessione al database.
     *
     * @var string
     */
    protected $connection = 'activity';
}
