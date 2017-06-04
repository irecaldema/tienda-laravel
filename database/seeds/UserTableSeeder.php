<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data = array(
			[
				'name' 		=> 'Javier', 
				'last_name' => 'Cebolla', 
				'email' 	=> 'cebolla@gmail.com', 
				'user' 		=> 'prueba',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Maika', 
				'last_name' => 'Admin', 
				'email' 	=> 'maika@maika.com', 
				'user' 		=> 'maika',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> ' Calle Juan Fermin Gilisagasti, 2, Donostia, España',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Raquel', 
				'last_name' => 'Torres', 
				'email' 	=> 'requel@correo.com', 
				'user' 		=> 'prueba2',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
