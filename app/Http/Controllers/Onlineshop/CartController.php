<?php

namespace App\Http\Controllers\OnlineShop;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Variant;
use App\Models\Cart;
use App\Models\CartItem;


class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        // \Log::info($request->all());

        $userId = Auth::id();
        $itemId = $request->item_id;
        $quantity = $request->quantity;

        // dump($userId);
        // dump($itemId);
        // dump($quantity);

        // check if item exists
        $item = Item::find($itemId);
        if (!$item) {
            return response()->json([
                'message' => 'Item not found'
            ], 404);
        }

        
        // find or create cart for user
        $cart = Cart::firstOrCreate(
            ['User_user_id' => $userId],
            ['total_price' => 0]
        );
        
        // return request()->all();


        // check if item is already in cart
        $cartItem = CartItem::where('Cart_cart_id', $cart->cart_id)
            ->where('Item_item_id', $itemId)
            ->first();

        if ($cartItem) {
            // update quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // add item to cart
            CartItem::create([
                'Cart_cart_id' => $cart->cart_id,
                'Item_item_id' => $itemId,
                'quantity' => $quantity
            ]);
        }

        // update total price
        $totalPrice = $cart->cartItems->sum(function ($cartItem) {
            return $cartItem->item->price * $cartItem->quantity;
        });
        $cart->total_price = $totalPrice;
        $cart->save();

        return response()->json([
            'message' => 'Item added to cart'
        ]);

    }


    public function getCart()
    {
        $userId = Auth::id();

        // find cart for user
        $cart = Cart::with('cartItems.item')->where('User_user_id', $userId)->first();
        if (!$cart) {
            return response()->json([
                'message' => 'Cart not found'
            ], 404);
        }

        // find cart items
        $cartItems = CartItem::where('Cart_cart_id', $cart->cart_id)->get();


        // find product that is in cart items
        $product = [];
        foreach ($cartItems as $cartItem) {
            $item = Item::find($cartItem->Item_item_id);
            $variant = Variant::where('Item_item_id', $item->item_id)->get();
            $product[] = [
                'item_id' => $item->item_id,
                'name' => $item->name,
                'price' => $item->price,
                'image' => $item->image,
                'stock' => $item->stock,
                'quantity' => $cartItem->quantity,
                'variant' => $variant
            ];
        }

        $cart->product = $product;
        


        return response()->json($cart);
    }
}
