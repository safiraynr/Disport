<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bencanas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_bencana', 100);
            $table->string('deskripsi_bencana', 200);
            $table->string('provinsi_bencana',100);
            $table->string('kabupaten_bencana', 100);
            $table->string('kecamatan',100);
            $table->integer('kode_pos')->unsigned();
            $table->string('alamat_lengkap',200);
            $table->string('foto_bencana');
            $table->unsignedInteger('id_pelapor');
            $table->foreign('id_pelapor')-> references('id')->on('users');
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
        Schema::dropIfExists('bencanas');
    }
}
