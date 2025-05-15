<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Filament\Tables\Columns\Tables;
=======
>>>>>>> 47b5495 (.)
=======
use Filament\Tables\Columns\Tables;
>>>>>>> Stashed changes

/**
 * @see ActivityResource
 */
class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;

<<<<<<< Updated upstream
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
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                ->label('Created At'),

>>>>>>> 47b5495 (.)
=======
                ->sortable(),
>>>>>>> Stashed changes
        ];
    }
}
