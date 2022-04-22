<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\kaydolModel;
use App\Models\urunEklemeModel;
use App\Models\urunlerigoster;

class uyeOl extends Controller
{
   
    function urunKaydet(Request $istek)
    {
        try
        {
            $urun = new urunEklemeModel;
            $urun->urunbilgisi = $istek->urunEkleAciklama;
            $urun->urunadet = $istek->urunEkleAdet;
            $urun->urunfiyat = $istek->urunEkleFiyat;
            $urun->urunfoto="uploads/indir.png";
            $urun->save();
            return redirect()->back();
        }
        catch(Exception $e)
        {
            echo "mesaj -> ".$e->getMessage();
        }
    }

    function urunusil($urunid)
    {
        $veri=urunlerigoster::find($urunid);
        $veri->delete();
        return redirect()->back();
    }

}
