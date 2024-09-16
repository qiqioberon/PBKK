<?php

namespace App\Http\Controllers\Pertemuan1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('pertemuan1.form');
    }

    public function handleForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        return view('pertemuan1.form-success', ['data' => $validatedData]);
    }
}
