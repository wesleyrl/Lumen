<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
	public function run()
	{
		// TODO: Implement run() method.
		factory(\App\Entities\Telefone::class, 30)->create();
	}
}