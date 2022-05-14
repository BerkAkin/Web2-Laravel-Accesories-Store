<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siparisler;
use Alert;

class SiparisVer extends Controller
{
    function siparisi_tamamla(Request $istek)
    {
       
        $ogeler1= $istek->all();
        foreach( $ogeler1 as $ogeler ){
        }
         $sepettekiler = json_encode($ogeler, JSON_UNESCAPED_UNICODE);
        $siparis= new Siparisler;
        $siparis->siparisAdSoyad= $istek->siparisAdSoyad;
        $siparis->siparisurnuleri=$sepettekiler;
        $siparis->siparisadresi=$istek->siparisAdres;
        $siparis->siparisTelNo=$istek->siparisTelNo;
        $siparis->siparisEmail=$istek->siparisposta;  
        $siparis->save();
      
        \Cart::destroy();
        return redirect()->back();    
    }
}
