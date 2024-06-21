<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product' =>  $this->whenLoaded('product'),
            'category' => $this->whenLoaded('getCategoryName')
        ];
    }
    public function with($request)
    {
        return ['status'=>'success'];
    }
}
