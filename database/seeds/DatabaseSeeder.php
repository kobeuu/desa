<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		User::create([
			'name' => 'Administrator',
			'email' => 'admin@wanawali.desa.id',
			'password' => bcrypt('123456'),
			'jabatan' => 'Operator Desa',
		]);

		Model::reguard();
	}

}
