<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasukResource\Pages;
use App\Filament\Resources\MasukResource\RelationManagers;
use App\Models\Masuk;
use App\Models\Supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MasukResource extends Resource
{
    protected static ?string $model = Masuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kdMasuk')
                ->label('Kode Masuk')
                ->maxLength(5)
                ->required(),
                Forms\Components\DatePicker::make('tglMasuk')
                ->label('Tanggal Masuk')
                ->required(),
                Forms\Components\TextInput::make('kdAdmin')
                ->label('Kode Admin')
                ->maxLength(5)
                ->required(),
                Forms\Components\Select::make('kdSupplier')
                ->label('Kode Supplier')
                ->options(Supplier::all()->pluck('kdSupplier', 'id'))
                ->searchable(),
                Forms\Components\TextInput::make('totalMasuk')
                ->label('Total Masuk')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kdMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tglMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdAdmin')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdSupplier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('totalMasuk')->sortable()->searchable(),
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
            'index' => Pages\ListMasuks::route('/'),
            'create' => Pages\CreateMasuk::route('/create'),
            'edit' => Pages\EditMasuk::route('/{record}/edit'),
        ];
    }
}
