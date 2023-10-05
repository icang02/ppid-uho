<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisFormulirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_formulir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_formulir');

            $table->string('persyaratan')->nullable();
            $table->text('isi_persyaratan')->nullable();

            $table->string('mekanisme')->nullable();
            $table->text('isi_mekanisme')->nullable();

            $table->string('jangka_waktu')->nullable();
            $table->text('isi_jangka_waktu')->nullable();

            $table->string('biaya')->nullable();
            $table->string('isi_biaya')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_formulir');
    }
}
