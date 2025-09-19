<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Items extends Model
{   
    use  HasFactory;

    // Menentukan kolom-kolom yang dapat diisi
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'category_id',
    ];

    public function category(): BelongsTo   
    {
        return $this->belongsTo(Categories::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transactions::class);
    }
    
}
