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
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_meja')->unsigned();
            $table->string('nama_menu');
            $table->enum('ketegori', ['Steak', 'Ayam', 'Minuman']);
            $table->string('gambar');
            $table->integer('harga');
            $table->string('add_ons');
            $table->text('desc');
            $table->boolean('availability')->default('0');
            $table->foreign('id_meja')->on('meja')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
