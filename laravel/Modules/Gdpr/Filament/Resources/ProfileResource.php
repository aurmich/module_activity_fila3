<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Gdpr\Filament\Resources\ProfileResource\Pages;
use Modules\Gdpr\Models\Profile;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ProfileResource extends XotBaseResource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('first_name')
                    ->maxLength(191)
                    ->default(null),
                Forms\Components\TextInput::make('last_name')
                    ->maxLength(191)
                    ->default(null),
                Forms\Components\TextInput::make('full_name')
                    ->maxLength(191)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(191)
                    ->default(null),
                Forms\Components\TextInput::make('user_id')
                    ->maxLength(36)
                    ->default(null),
                Forms\Components\TextInput::make('updated_by')
                    ->maxLength(36)
                    ->default(null),
                Forms\Components\TextInput::make('created_by')
                    ->maxLength(36)
                    ->default(null),
                Forms\Components\TextInput::make('deleted_by')
                    ->maxLength(36)
                    ->default(null),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('id')
    //
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('type')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('first_name')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('last_name')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('full_name')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('email')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('created_at')
    //                 ->dateTime()
    //                 ->sortable()
    //                 ->toggleable(isToggledHiddenByDefault: true),
    //             Tables\Columns\TextColumn::make('updated_at')
    //                 ->dateTime()
    //                 ->sortable()
    //                 ->toggleable(isToggledHiddenByDefault: true),
    //             Tables\Columns\TextColumn::make('user_id')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('updated_by')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('created_by')
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('deleted_at')
    //                 ->dateTime()
    //                 ->sortable()
    //                 ->toggleable(isToggledHiddenByDefault: true),
    //             Tables\Columns\TextColumn::make('deleted_by')
    //                 ->searchable(),
    //             Tables\Columns\IconColumn::make('is_active')
    //                 ->boolean(),
    //         ])
    //         ->filters([
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //         ])
    //         ->emptyStateActions([
    //         ]);
    // }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
