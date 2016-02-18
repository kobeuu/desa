<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('keluargas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('no_kk');
			$table->string('kepala');
			$table->string('alamat');
			$table->string('rt');
			$table->string('rw');
			$table->string('desa');
			$table->string('kecamatan');
			$table->string('kabupaten');
			$table->string('kode_pos');
			$table->string('propinsi');
			$table->timestamps();
		});

		Schema::create('warga_keluarga', function(Blueprint $table)
		{
			$table->integer('warga_id')->unsigned()->index();
			$table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade');

			$table->integer('keluarga_id')->unsigned()->index();
			$table->foreign('keluarga_id')->references('id')->on('keluargas')->onDelete('cascade');

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
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('keluargas');
		Schema::drop('warga_keluarga');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
