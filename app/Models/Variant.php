<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'Item_item_id', 
        'variant_name', 
        'image_back', 
        'image_front', 
        'image_side'
    ];


    public function item()
    {
        return $this->belongsTo(Item::class, 'Item_item_id');
    }
}
