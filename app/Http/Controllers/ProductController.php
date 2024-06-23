<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Resources\Product\ProductDetailResource;
use App\Http\Resources\Product\ProductResource;

use App\Models\Product;
use App\Models\ProductCategory;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = ProductCategory::with(['getCategoryName:category_id,category_name', 'product:product_id,product_name,stock'])->get();
        // return ProductResource::collection($product);

        $product = Product::get();
        return ProductResource::collection($product);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        try {
            $validatedData = $request->validated();

            Product::create([
                'product_name' => $validatedData['product_name'],
                'product_description' => $validatedData['product_description'],
                'price' => $validatedData['price'],
                'stock' => $validatedData['stock'],
            ]);

            return response()->json(['message' => 'Product created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create product', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $product_id)
    {
        $product_id->load('product', 'getCategoryName');
        return new ProductDetailResource($product_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
