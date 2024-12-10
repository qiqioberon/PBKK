<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    protected $fillable = [
        'Cart_cart_id', 
        'Item_item_id',
        'quantity'
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'Cart_cart_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'Item_item_id');
    }


}
