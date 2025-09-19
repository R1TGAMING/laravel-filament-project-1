<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use  HasFactory;
    
    // Menentukan kolom-kolom yang dapat diisi
    protected $fillable = [
        'name',
        'description',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Items::class);
    }
}
