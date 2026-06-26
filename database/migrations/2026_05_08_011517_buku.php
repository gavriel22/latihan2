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
        //fungsi untuk membuat kolom-kolom di tabel
        Schema::create('buku', function(Blueprint $table){
            $table->id();
            $table->string('judul');
            $table->string('pengarang');
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
