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
        Schema::create('dvendors', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedInteger('idVendors');
            $table->string('nama');
            $table->string('lokasi');
            $table->decimal('harga', 10, 2);
            $table->string('rate');
            $table->mediumText('desc');
            $table->foreign('idVendors')->references('idVendors')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('dvendors');
    }
};
