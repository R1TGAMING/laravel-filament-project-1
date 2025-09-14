<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoriesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("name")->label("Nama Kategori")->required(),
                TextInput::make("description")->label("Deskripsi")->nullable(),
            ]);
    }
}
