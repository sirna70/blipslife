<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

public function up()
{
    Schema::create('insured_data', function (Blueprint $table) {
        $table->id();
        $table->string('ktp')->nullable();
        $table->string('name');
        $table->string('sex');
        $table->date('birth_of_date');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insured_data');
    }
};
