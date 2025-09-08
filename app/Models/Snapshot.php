<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\EventSourcing\Snapshots\EloquentSnapshot as SpatieSnapshot;

/**
 * Modules\Activity\Models\Snapshot.
 *
 * @property int $id
 * @property string $aggregate_uuid
 * @property int $aggregate_version
 * @property array $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot query()
 * @method static int count()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot where(string $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot uuid(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereAggregateUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereAggregateVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot whereUpdatedBy($value)
 * @method static Snapshot|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, Snapshot> get()
 * @method static Snapshot create(array $attributes = [])
 * @method static Snapshot firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snapshot where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snapshot whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperSnapshot
 * @mixin \Eloquent
 */
class Snapshot extends SpatieSnapshot
{
    use HasFactory;

    /** @var string */
    protected $connection = 'activity';

    /** @var list<string> */
    protected $fillable = ['id', 'aggregate_uuid', 'aggregate_version', 'state', 'created_at', 'updated_at'];
}
