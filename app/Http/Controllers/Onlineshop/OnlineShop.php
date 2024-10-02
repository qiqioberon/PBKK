<?php

namespace App\Http\Controllers\Onlineshop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnlineShop extends Controller
{
    public $allProduct = [
        [
            'name' => 'Kentang GedaGedi',
            'price' => 30000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 1',
            'price' => 10000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 2',
            'price' => 20000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 3',
            'price' => 40000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 4',
            'price' => 100000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 5',
            'price' => 30000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 6',
            'price' => 50000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 7',
            'price' => 72000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 8',
            'price' => 120000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 9',
            'price' => 122000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
        [
            'name' => 'Kentang GedaGedi 10',
            'price' => 1234000,
            'image' => 'resources/images/Onlineshop/Main/kentang.png',
        ],
    ];

    public function handleShowCart(Request $request)
    {
        // Ambil cart dari session
        $cart = $request->session()->get('cart', []);

        // Jika ada data cart baru dari request, simpan di session
        if ($request->has('cart')) {
            $request->session()->put('cart', $request->input('cart'));
        }

        return redirect()->route('onlineshop.allproducts');
    }


    public function changeAmountProduct(Request $request)
    {
        // Ambil cart dari session
        $cart = session()->get('cart', []);

        // Update jumlah produk dalam cart
        $product = $request->input('product');
        $amount = $request->input('amount');
        $index = array_search($product, array_column($cart, 'name'));

        // Jika produk ditemukan, perbarui jumlah
        if ($index !== false) {
            $cart[$index]['amount'] = $amount;
        }

        // Simpan kembali cart yang diperbarui ke session
        session()->put('cart', $cart);
    }

    public function allProducts(Request $request)
    {
        // Ambil cart dari session
        $cart = $request->session()->get('cart', []);

        return view('Pertemuan4.onlineshop', [
            'products' => $this->allProduct,
            'cart' => $cart,
        ]);
    }
}