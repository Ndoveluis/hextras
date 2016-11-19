<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		Model::reguard();


		 $this->call('CargoSeeder');
	}

}



/**<?php        sharsan

class DatabaseSeeder extends Seeder {

	
	 // Run the database seeds.
	 
	 // @return void
	
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
 */