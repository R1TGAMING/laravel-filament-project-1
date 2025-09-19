<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model
{
    use  HasFactory;
    

    // Menentukan kolom-kolom yang dapat diisi
    protected $fillable = [
        'item_id',
        'type',
        'quantity',
        'note',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Items::class);
    }
}
