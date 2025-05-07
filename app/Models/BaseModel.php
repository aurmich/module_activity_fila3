<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;

/**
<<<<<<< HEAD
 * Class BaseModel.
<<<<<<< HEAD
=======
 * Classe BaseModel.
 *
 * Classe base astratta per tutti i modelli nel modulo Activity.
 * Fornisce funzionalità comuni come factory, aggiornamento automatico e gestione degli attributi.
>>>>>>> cc965c3 (.)
 *
 * @template TFactory of \Illuminate\Database\Eloquent\Factories\Factory<static>
=======
<<<<<<< HEAD
=======
 *
 * @template TFactory of \Illuminate\Database\Eloquent\Factories\Factory<static>
>>>>>>> origin/dev
>>>>>>> ecd5971 (.)
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
    // use Cachable;
    use Updater;

    /**
     * Indica se gli attributi devono essere convertiti in snake_case negli array.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /**
     * Indica se il modello utilizza incremento automatico per l'ID.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indica se il modello utilizza i timestamp.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Numero di elementi per pagina nella paginazione.
     *
     * @var int
     */
    protected $perPage = 30;

    /**
     * Nome della connessione al database.
     *
     * @var string
     */
    protected $connection = 'activity';

    /**
     * Nome della chiave primaria.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Tipo della chiave primaria.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Attributi nascosti durante la serializzazione.
     *
     * @var list<string>
     */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Attributi che possono essere assegnati in massa.
     *
     * @var list<string>
     */
    protected $fillable = [];

    /**
     * Definisce i cast degli attributi.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',

            'published_at' => 'datetime',
        ];
    }

    /**
     * Crea una nuova istanza della factory per il modello.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory(): Factory
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
}
