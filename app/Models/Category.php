<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable =['category_name'];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }
    public function haveProductCategory(){
        return $this->belongsTo(ProductCategory::class,'id');
    }
}
