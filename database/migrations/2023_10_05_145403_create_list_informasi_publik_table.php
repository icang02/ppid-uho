<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListInformasiPublikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_informasi_publik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('informasi_publik_id');

            $table->foreign('informasi_publik_id')->references('id')->on('informasi_publik')->onDelete('cascade');

            $table->string('judul');
            $table->text('isi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_informasi_publik');
    }
}
