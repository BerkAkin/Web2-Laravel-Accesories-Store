<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siparisler;


class SiparisVer extends Controller
{
    function siparisi_tamamla(Request $istek)
    {
        $siparis= new Siparisler;
        $siparis->siparisurnuleri=$istek;
        $siparis->siparisadresi=$istek;
        $siparis->toplamfiyat=$istek;
    }
}
