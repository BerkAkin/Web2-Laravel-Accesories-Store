<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siparisler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /* Siparişler Tablosu */
      Schema::create('siparisler', function (Blueprint $table) {
        $table->id('id');
        $table->string('siparisAdSoyad',100);
        $table->string('siparisurnuleri', 3000);
        $table->string('siparisadresi',1000);
        $table->string('siparisTelNo',12);
        $table->string('siparisEmail',100);
        $table->string('siparisOnay',30)->default('Onay Bekliyor');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siparisler');
    }
}
