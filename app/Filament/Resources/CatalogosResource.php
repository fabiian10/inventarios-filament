<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CatalogosResource\Pages;
use App\Filament\Resources\CatalogosResource\RelationManagers;
use App\Models\Catalogos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class CatalogosResource extends Resource
{
    protected static ?string $model = Catalogos::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Registro en Catalogo')
                    ->columns(2)
                    ->schema([
                //         // ...
                        Forms\Components\TextInput::make('oficina')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('titular')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tratamiento')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('cargo')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('prefijo')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('carpeta')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('ur')
                            ->required()
                            ->maxLength(255),
                    ])                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('oficina')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tratamiento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cargo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prefijo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('carpeta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ur')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCatalogos::route('/'),
            'create' => Pages\CreateCatalogos::route('/create'),
            'edit' => Pages\EditCatalogos::route('/{record}/edit'),
        ];
    }
}
