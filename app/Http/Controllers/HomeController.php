<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\urunlerigoster;
use App\Models\User;
use App\Models\Siparisler;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $veriler= urunlerigoster::all();
        return view('anasayfa')->with('uruns', $veriler);
    }

    
    public function adminHome()
    {
        $veriler= urunlerigoster::all();
        $kullanicilar= User::all();
        $siparisler= Siparisler::all();
        return view('adminHome', ['uruns'=>$veriler,'kullanicis'=>$kullanicilar,'siparises'=>$siparisler]);
        //return view('adminHome')->with('uruns', $veriler);
    }
    
}
