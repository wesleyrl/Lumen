<?php

use Illuminate\Database\Seeder;
use App\User;

class PessoaTableSeeder extends Seeder
{
	/**
	 * Rum the database seeds;
	 *
	 * @return void
	 */

	public function run()
	{
		factory(\App\Entities\Pessoa::class,30)->create();
	}
}