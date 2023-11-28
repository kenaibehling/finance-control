<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'description',
        'value',
        'payment_method_id',
        'category_id',
        'status',
        'installments',
        'card',
        'purchase_date'
    ];
    protected $table = 'expenses';
    use HasFactory;
}
