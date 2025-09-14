<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class TransactionsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('item_id')
                    ->relationship('item', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('type')->options([
                    'in' => 'In',
                    'out' => 'Out',
                ])->required(),
                TextInput::make('quantity')->numeric()->required(),
                TextInput::make('note')->nullable(),
            ]);
    }
}
