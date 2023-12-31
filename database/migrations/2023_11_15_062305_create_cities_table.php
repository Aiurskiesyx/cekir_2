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
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            //P10 N0.17
            // $table->unsignedBigInteger('code');
            // $table->string('title');
            // $table->unsignedBigInteger('province_code');
            $table->foreignId('province_id');
            $table->string('type');
            $table->string('name');
            $table->string('postal_code');
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
        Schema::dropIfExists('cities');
    }
};