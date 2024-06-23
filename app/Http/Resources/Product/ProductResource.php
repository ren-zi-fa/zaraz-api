<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\This;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "product_id"=>$this->product_id,
            "product_name" => $this->product_name,
            "product_description" => $this->product_description,
            "price"=>$this->price,
            "stock"=>$this->stock,
            "created_at"=>$this->created_at->diffForHumans()
          
        ];
    }


}
