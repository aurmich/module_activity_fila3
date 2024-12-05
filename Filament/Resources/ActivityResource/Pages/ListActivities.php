<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
<<<<<<< HEAD

=======
>>>>>>> 8c47309d84dafebeb94abdfee3ee9eb754fdd7a5
                ->sortable(),
            Tables\Columns\TextColumn::make('description'),
            Tables\Columns\TextColumn::make('created_at')

                ->sortable(),
        ];
    }
}
