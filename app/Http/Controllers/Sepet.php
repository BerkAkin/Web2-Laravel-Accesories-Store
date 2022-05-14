<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sepet extends Controller
{
    function ekle(Request $istek)
    {
        $adt= $istek->qty;
        $num= $istek->urununidsi;
        $ism= $istek->urununadi;
        $fiy= $istek->urununfiyati;
        \Cart::add($num, $ism, $adt, $fiy);
        return redirect()->back();
    }

    function kaldir($id)
    {
        \Cart::remove($id);
        return redirect()->back();
    }
}
