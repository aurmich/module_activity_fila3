<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\Snapshots\EloquentSnapshot as SpatieSnapshot;

/**
 * Classe BaseSnapshot.
 *
 * Classe base per gli snapshot che estende EloquentSnapshot di Spatie.
 * Fornisce funzionalità comuni per la gestione degli snapshot nel sistema di event sourcing.
 */
abstract class BaseSnapshot extends SpatieSnapshot
{
    /**
     * Nome della connessione al database.
     *
     * @var string
     */
    protected $connection = 'activity';
}
