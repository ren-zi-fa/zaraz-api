<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function productCategory():BelongsToMany
    {
        return $this->belongsToMany(ProductCategory::class,'id');
    }

    public function category():HasMany
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
