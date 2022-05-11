<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\urunlerigoster;
use App\Models\User;
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
        return view('adminHome', ['uruns'=>$veriler,'kullanicis'=>$kullanicilar]);
        //return view('adminHome')->with('uruns', $veriler);
    }
    
}
