<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $primaryKey = 'address_id';
    protected $fillable = [
        'user_id',
        'city',
        'postal_code',
        'country'
    ];

    public function user (){
        return $this->belongsTo(User::class,'user_id');
    }
}
