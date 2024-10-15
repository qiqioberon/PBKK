<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'Cart_cart_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'Item_item_id');
    }



}
