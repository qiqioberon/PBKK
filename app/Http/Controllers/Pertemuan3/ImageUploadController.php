<?php
// app/Http/Controllers/ImageUploadController.php
namespace App\Http\Controllers\Pertemuan3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function showForm()
    {
        return view('Pertemuan3.ImageProcessing.imageinput');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        return redirect()->route('output.image')->with('imageName', $imageName);
    }

    public function showImage(Request $request)
    {
        $imageName = session('imageName');
        return view('Pertemuan3.ImageProcessing.imageoutput', compact('imageName'));
    }
}
