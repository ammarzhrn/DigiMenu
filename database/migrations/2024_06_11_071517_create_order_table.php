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
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_menu')->unsigned();
            $table->integer('id_customer')->unsigned();
            $table->integer('id_meja')->unsigned();
            $table->boolean('status')->default('0');
            $table->integer('qty');
            $table->integer('total');
            $table->foreign('id_menu')->on('menu')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_customer')->on('customer')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_meja')->on('meja')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
