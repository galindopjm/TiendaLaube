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
				'name' 		=> 'Juan', 
				'last_name' => 'Galindo', 
				'email' 	=> 'galindopjm@outlook.com', 
				'user' 		=> 'juan1',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'San Cosme 290',
				'state' 	=> 'Jalisco',
				'town' 		=> 'Tonala',
				'codepost' 	=> '34567',
				'tel' 		=> '6751082819',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Adela', 
				'last_name' => 'Torres', 
				'email' 	=> 'adela@correo.com', 
				'user' 		=> 'adela',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Negrete 321',
				'state' 	=> 'Durango',
				'town' 		=> 'Durango',
				'codepost' 	=> '34228',
				'tel' 		=> '6181697772',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
