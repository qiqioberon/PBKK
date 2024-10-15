<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'cart_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'User_user_id');   
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'Cart_cart_id');
    }
}
