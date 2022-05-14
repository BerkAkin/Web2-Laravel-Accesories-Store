<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunEklemeModel extends Model
{
    use HasFactory;
    protected $table ='urunler';
    public $timestamps = false;
}
