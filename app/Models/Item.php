<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'name',
        'price',
        'image'
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'Item_item_id');
    }

    public function variants()
    {
        return $this->hasMany(Variant::class, 'Item_item_id');
    }
}
