<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardBrand extends Model
{
    protected $fillable = ['description'];
    protected $table = 'cards_brands';
    use HasFactory;
}
