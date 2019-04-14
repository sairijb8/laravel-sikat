<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nrtk');
			$table->string('jenkel',1);
			$table->string('tmplhr',50);
			$table->date('tgllhr');
			$table->string('agama');
			$table->string('stskawin',12);
			$table->string('alamat');
			$table->string('notlp');
			$table->string('email');
			$table->string('jabatan');
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
        Schema::dropIfExists('pegawai');
    }
}
