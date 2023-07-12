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
        Schema::create('table_akuntansi_history_tutup_buku', function (Blueprint $table) {
            $table->integer('id_backup, 12')->primary();
            $table->string('nama_file', '25');
            $table->date('tanggal_backup');
            $table->string('id_user', '25');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_akuntansi_history_tutup_buku');
    }
};
