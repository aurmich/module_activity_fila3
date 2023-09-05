<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class BelongsToManyAction
{
    use QueueableAction;

    public function execute(Model $model, \Modules\Xot\DTOs\RelationDTO $relationDTO): void
    {
        // dddx(['row' => $row, 'relation' => $relation]);
        if (\in_array('to', array_keys($relationDTO->data), true) || \in_array('from', array_keys($relationDTO->data), true)) {
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            $to = $relationDTO->data['to'] ?? [];

            $model->{$relationDTO->name}()->sync($to);
            $status = 'collegati ['.implode(', ', $to).'] ';
            \Illuminate\Support\Facades\Session::flash('status', $status);

            return;
        }
        $model->{$relationDTO->name}()->sync($relationDTO->data);
    }
}
