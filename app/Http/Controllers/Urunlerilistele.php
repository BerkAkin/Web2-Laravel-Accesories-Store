<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\urunlerigoster;
class Urunlerilistele extends Controller
{
    public function goster()
    {
      
        $veriler= urunlerigoster::all();
        return view('anasayfa')->with('uruns',$veriler);
       
    }
}
