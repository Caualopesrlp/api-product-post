<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProductService
{
    public function createProduct(array $data)
    {
        try {
            $response = Http::timeout(5)
                ->post(
                    'https://dummyjson.com/products/add',
                    $data
                );

            $response->throw();

            return $response->json();

        } catch (Exception $e) {
            Log::error(
                'Falha na criação do produto',
                [
                    'message' => $e->getMessage(),
                    'data' => $data,
                ]
            );

            throw $e;
        }
    }
}