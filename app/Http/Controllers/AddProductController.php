<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Validasi file gambar
        ]);

        $image = $request->file('image');
        if (!$image->isValid()) {
            dd('File tidak valid: ', $image->getErrorMessage());
        }
        $imageName = $request->name . '.' . $image->getClientOriginalExtension();
        $imagedbPath = 'resources/images/Onlineshop/Main/';
        $imagePath = base_path('resources/images/Onlineshop/Main');
        $image->move($imagePath, $imageName);

        // dd($image->getClientOriginalName(), $image->getClientOriginalExtension(), $image->getRealPath());


        // Generate harga random
        $price = rand(10000, 100000);


        // Simpan ke database
        $item = new Item();
        $item->name = $request->name;
        $item->price = $price;
        $item->image = $imagedbPath . $imageName;
        $item->save();

        // Redirect atau respons
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }
}
