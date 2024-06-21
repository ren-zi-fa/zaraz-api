<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';
    protected $fillable = [
        'user_id',
        'total_amount',
        'status'
    ];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_detail_id');
    }
    public function userOrder()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
