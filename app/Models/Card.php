<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['name', 'type_id', 'provider_id'];
    protected $table = 'cards';
    use HasFactory;
}
