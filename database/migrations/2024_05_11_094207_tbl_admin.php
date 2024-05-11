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
        Schema::create('tbl_admin', function (Blueprint $table) {
            
            $table->id();
            $table->string('Nama_admin', 45);
            $table->string('Keterangan',45);
            $table->unsignedBigInteger('tbl_user_id');
            $table->foreign('tbl_user_id')->references('id')->on('tbl_user');   
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
