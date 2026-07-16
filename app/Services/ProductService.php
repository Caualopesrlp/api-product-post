<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class ProductService
{
    public function createProduct(array $data)
    {
        $response = Http::post(
            'https://dummyjson.com/products/add',
            $data
        );

        return $response->json();
    }
}
