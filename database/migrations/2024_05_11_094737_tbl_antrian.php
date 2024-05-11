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
        Schema::create('tbl_antrian', function (Blueprint $table) {
            
            $table->id();
            $table->string('No_antrian', 45);
            $table->enum('status_antrian',['S','B']);
            $table->unsignedBigInteger('tbl_dokter_id');
            $table->foreign('tbl_dokter_id')->references('id')->on('tbl_dokter');
            $table->unsignedBigInteger('tbl_pasien_id');
            $table->foreign('tbl_pasien_id')->references('id')->on('tbl_pasien');
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
