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
            $table->enum('kategori', ['food', 'drink']);
            $table->string('gambar');
            $table->integer('harga');
            $table->enum('add_ons', ['Extra Barbeque Sauce', 'Extra Chili Sauce', 'Extra Cheese']);
            $table->text('desc');
            $table->boolean('availibility')->default('0');
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
