<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartamentosResource\Pages;
use App\Filament\Resources\DepartamentosResource\RelationManagers;
use App\Models\Departamentos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class DepartamentosResource extends Resource
{
    protected static ?string $model = Departamentos::class;

    protected static ?string $navigationGroup = 'Directorio';
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Registro en Departamento')
                    ->columns(2)
                    ->schema([
                //         // ...
                        Forms\Components\TextInput::make('departamento')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nombre_titular')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tratamiento_titular')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('cargo_titular')
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
                Tables\Columns\TextColumn::make('departamento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_titular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tratamiento_titular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cargo_titular')
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
            'index' => Pages\ListDepartamentos::route('/'),
            'create' => Pages\CreateDepartamentos::route('/create'),
            'edit' => Pages\EditDepartamentos::route('/{record}/edit'),
        ];
    }
}
