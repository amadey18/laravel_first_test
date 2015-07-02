<?php

class UsersTableSeeder  extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            DB::table('users')->delete();
            User::create(array(
                'username' => 'admin',
                'email'    => 'admin@example.com',
                'password' => Hash::make('admin'),
            ));
            User::create(array(
                'username' => 'user1',
                'email'    => 'user1@example.com',
                'password' => Hash::make('user1'),
            ));
            User::create(array(
                'username' => 'user2',
                'email'    => 'user2@example.com',
                'password' => Hash::make('user2'),
            ));
	}

}