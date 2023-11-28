<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardProvider extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brand_id'];
    protected $table = 'cards_providers';

    public function brand() : BelongsTo
    {
        return $this->belongsTo(CardBrand::class, 'brand_id');
    }
}
