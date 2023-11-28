<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardBrand;

class CardBrandController extends Controller
{
    public function addCardBrand(): string {
        $data = [
        'description' => 'MasterCard',
        ];

        CardBrand::create($data);

        return "Registro salvo.";
    }
}
