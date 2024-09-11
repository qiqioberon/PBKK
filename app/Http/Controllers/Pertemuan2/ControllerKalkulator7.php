<?php

namespace App\Http\Controllers\Pertemuan2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerKalkulator7 extends Controller
{

    public function handleForm(Request $request)
    {
        $hasil = $request->answer;

        $hasil = eval('return ' . $hasil . ';');
        return view('Pertemuan2.Kalkulator.kalkulator7', [
            'hasil' => $hasil
        ]);
    }
}
