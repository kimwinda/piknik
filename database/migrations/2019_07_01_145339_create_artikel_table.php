<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('id_artikel');
            $table->string('judul', 50);
            $table->text('deskripsi');
            $table->string('foto');
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();

            $table
            ->foreign('id_kategori')
            ->references('id_kategori')
            ->on('kategori');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
