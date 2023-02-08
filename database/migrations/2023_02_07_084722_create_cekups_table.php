<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cekups', function (Blueprint $table) {
            $table->id();
            $table->string('cervical');
            $table->string('thoraxal');
            $table->string('lumbar');
            $table->string('sarcal');
            $table->string('palvis');
            $table->string('plintiran');
            $table->string('kompresi');
            $table->string('type_veterbra');
            $table->string('type_thoraxal');
            $table->string('visual');
            $table->string('lain_lain');
            $table->string('tindakan');
            $table->string('hasil');
            $table->string('hasil_pemeriksaan_1');
            $table->string('hasil_pemeriksaan_2');
            $table->string('hasil_pemeriksaan_3');
            $table->string('hasil_pemeriksaan_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cekups');
    }
}
