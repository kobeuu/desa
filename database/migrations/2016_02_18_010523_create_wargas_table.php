<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wargas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('nik');
			$table->string('nama');
			$table->string('tempat_lahir');
			$table->string('tanggal_lahir');
			$table->string('jk');
			$table->string('hubungan');
			$table->string('status');
			$table->string('pendidikan');
			$table->string('pekerjaan');
			$table->string('gol_darah');
			$table->string('agama');
			$table->string('nama_ortu');
			$table->string('kelainan_mental_fisik');
			$table->string('baca_tulis');
			$table->string('jenis_akseptor');
			$table->string('jenis_layanan_reg_rental');
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
		Schema::drop('wargas');
	}

}
