<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\Tables;
=======
>>>>>>> 563330c (.)
=======
use Filament\Tables\Columns\Tables;
>>>>>>> daa3674 (.)

/**
 * @see ActivityResource
 */
class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('description')
                ->searchable()
                ->limit(50),
            TextColumn::make('subject_type')
                ->searchable(),
            TextColumn::make('subject_id')
                ->searchable(),
            TextColumn::make('causer_type')
                ->searchable(),
            TextColumn::make('causer_id')
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
=======
    public function getListTableColumns(): array
=======
    public function getTableColumns(): array
>>>>>>> daa3674 (.)
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('description')
                ->searchable()
                ->limit(50),
            TextColumn::make('subject_type')
                ->searchable(),
            TextColumn::make('subject_id')
                ->searchable(),
            TextColumn::make('causer_type')
                ->searchable(),
            TextColumn::make('causer_id')
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
<<<<<<< HEAD
                ->label('Created At'),

>>>>>>> 563330c (.)
=======
                ->sortable(),
>>>>>>> daa3674 (.)
        ];
    }
}
