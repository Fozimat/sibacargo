<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->string('penulis');
            $table->string('judul');
            $table->text('deskripsi');
            $table->timestamp('tanggal_posting');
            $table->string('gambar');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postingan', function (Blueprint $table) {
            Schema::dropIfExists('postingan');
        });
    }
};
