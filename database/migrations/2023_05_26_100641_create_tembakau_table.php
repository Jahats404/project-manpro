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
        Schema::create('tembakau', function (Blueprint $table) {
            $table->id();
            $table->string('id_tembakau');
            $table->string('nama_tembakau');
            $table->integer('stok_tembakau');
            $table->integer('harga_tembakau');
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
        Schema::dropIfExists('tembakau');
    }
};
