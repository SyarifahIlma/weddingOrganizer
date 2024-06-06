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
        Schema::create('dcustomers', function (Blueprint $table) {
            $table->unsignedInteger('noPesan');
            $table->string('id');
            $table->date('used_at');
            $table->foreign('id')->references('id')->on('dVendors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('noPesan')->references('noPesan')->on('customers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('dcustomers');
    }
};
