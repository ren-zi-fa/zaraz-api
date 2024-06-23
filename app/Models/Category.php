<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name'];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }
    public function haveProductCategory():BelongsToMany
    {
        return $this->belongsToMany(ProductCategory::class, 'id');
    }
}
