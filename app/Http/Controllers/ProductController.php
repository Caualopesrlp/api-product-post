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

            return redirect()
                ->route('products.create')
                ->with('success', 'Produto criado com sucesso!');
        } catch (Exception $e) {

            return redirect()
                ->route('products.create')
                ->with('error', 'Não foi possível criar o produto!');
        }
    }
}
