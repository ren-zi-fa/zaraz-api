<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
        'product_description',
        'price',
        'stock'
    ];

    public function productCategory()
    {
        return $this->hasMany(ProductCategory::class,'id');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
