<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //untuk	membuat	tabel,	kolom,	index	pada	database
        Schema::create('produk', function(Blueprint	$table)	{
            $table->increments('id_produk');
            $table->string('nama_produk');
            $table->integer('harga_jual');
            $table->integer('id_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
