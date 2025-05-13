<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * @see SnapshotResource
 */
class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> daa3674 (.)
    /**
     * Get the list table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
    public function getTableColumns(): array
<<<<<<< HEAD
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('aggregate_uuid')
                ->searchable(),
            TextColumn::make('aggregate_version')
                ->sortable(),
            TextColumn::make('state')
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
=======
    public function getListTableColumns(): array
=======
>>>>>>> daa3674 (.)
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('aggregate_uuid')
                ->searchable(),
            TextColumn::make('aggregate_version')
                ->sortable(),
            TextColumn::make('state')
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
<<<<<<< HEAD
                ->sortable()
                ->label('Created At'),

            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->label('Updated At'),
>>>>>>> 563330c (.)
=======
                ->sortable(),
>>>>>>> daa3674 (.)
        ];
    }

    /**
     * @return array<string, Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
            'aggregate_type' => Tables\Filters\SelectFilter::make('aggregate_type')
                ->options([
                    'user' => 'User',
                    'profile' => 'Profile',
                    'role' => 'Role',
                ])
                ->multiple(),
        ];
    }

    /**
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            'view' => Tables\Actions\ViewAction::make(),
            'edit' => Tables\Actions\EditAction::make(),
            'delete' => Tables\Actions\DeleteAction::make(),
        ];
    }

    /**
     * @return array<string, Tables\Actions\BulkAction>
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => Tables\Actions\DeleteBulkAction::make(),
        ];
    }
}
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 563330c (.)
=======

>>>>>>> daa3674 (.)
