<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = [
        'product_id',
        'category_id'
    ];

    public function getRouteKeyName(): string
    {
        return 'product_id';
    }

    public function product():BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }
    public function getCategoryName():BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_id');
    }
}
