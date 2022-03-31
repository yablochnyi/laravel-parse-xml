<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public static function load_xml()
    {
        $path = base_path('rywal.xml');
        $xml = simplexml_load_string(file_get_contents($path));

        return $xml;
    }

    public static function products()
    {
        $xml = self::load_xml();
        foreach ($xml->productsmegadiscounted->product as $value) {
            Product::updateOrCreate([
                'product_id' => $value->attributes()['id']
            ], [
                'product_id' => $value->attributes()['id'],
                'index' => $value->indeks,
                'name' => trim($value->name),
                'ean' => $value->ean,
                'mainprice' => $value->mainprice,
                'eshopprice' => $value->eshopprice,
                'discount' => $value->discount,
                'url' => $value->url,
            ]);
        }
    }
}
