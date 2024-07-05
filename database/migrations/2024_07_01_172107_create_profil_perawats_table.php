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
        Schema::create('profil_perawats', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('jeniskelamin');
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->string('unit_tempat_bekerja_terakhir');
            $table->date('mulai_bergabung_dirumah_sakit');
            $table->date('mulai_bekerja_diunit_terakhir');
            $table->string('status_kepegawaian');
            $table->string('asal_institusi_pendidikan_terakhir');
            $table->year('kelulusan_tahun');
            $table->date('tanggal_terbit_str');
            $table->date('tanggal_berakhir_masa_berlaku_str');
            $table->date('tanggal_terbit_sipp');
            $table->string('jabatan_anda_saat_ini');
            $table->string('level_pk_anda_saat_ini');
            $table->string('level_pk_yang_diajukan');
            $table->string('level_perawat_manajer_saat_ini');
            $table->string('orientasi');
            $table->string('cpd');
            $table->string('cpd_pk_1');
            $table->string('cpd_pk_2');
            $table->string('cpd_pk_3');
            $table->string('cpd_pk_4');
            $table->string('cpd_pk_5');
            $table->string('program_mutu');
            $table->string('setuju');
            //$table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_perawats');
    }
};
