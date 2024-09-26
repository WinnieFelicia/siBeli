<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DMasukResource\Pages;
use App\Filament\Resources\DMasukResource\RelationManagers;
use App\Models\DMasuk;
use App\Models\Masuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DMasukResource extends Resource
{
    protected static ?string $model = DMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('idMasuk')
                ->label('ID Masuk')
                ->maxLength(5)
                ->required(),
                Forms\Components\Select::make('kdMasuk')
                ->label('Kode Masuk')
                ->options(Masuk::all()->pluck('kdMasuk', 'id'))
                ->searchable(),
                Forms\Components\TextInput::make('kdBarangBeli')
                ->label('Kode Barang Beli')
                ->maxLength(5)
                ->required(),
                Forms\Components\TextInput::make('jumlah')
                ->label('Jumlah')
                ->required(),
                Forms\Components\TextInput::make('subTotal')
                ->label('Sub Total')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('idMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdBarangBeli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subTotal')->sortable()->searchable(),
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
            'index' => Pages\ListDMasuks::route('/'),
            'create' => Pages\CreateDMasuk::route('/create'),
            'edit' => Pages\EditDMasuk::route('/{record}/edit'),
        ];
    }
}
