<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id'
    ];

    public function getRouteKeyName(): string
    {
        return 'product_id';
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
    public function getCategoryName()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
