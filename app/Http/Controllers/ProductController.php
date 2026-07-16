<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Services\ProductService;
use Exception;


class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    
    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        try {

            $data = $request->validated();

            $response = $this->productService->createProduct($data);

            return $response;
        } catch (Exception $e) {

            return response()->json([
                'message' => 'Não foi possível criar o produto.'
            ], 500);
        }
    }
}
