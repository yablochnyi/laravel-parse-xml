<?php

namespace App\Http\Controllers;

use App\Mail\SendProducts;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public static function send()
    {
        $products = Product::all();
        Mail::to('Adam.Andrzejewski@rywal.com.pl')->send(new SendProducts($products));
    }
}
