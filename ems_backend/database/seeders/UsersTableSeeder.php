<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hassan Saeed',
                'email' => 'hassan@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LwF6PqQ4L7ofeeCX.ulo4OBoDvD4L3w.CFQpXaJLb1F3zrOUrHB86',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:00',
                'updated_at' => '2021-05-29 20:36:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mr John',
                'email' => 'john@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LwF6PqQ4L7ofeeCX.ulo4OBoDvD4L3w.CFQpXaJLb1F3zrOUrHB86',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:21',
                'updated_at' => '2021-05-29 20:36:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'smith',
                'email' => 'smith@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LwF6PqQ4L7ofeeCX.ulo4OBoDvD4L3w.CFQpXaJLb1F3zrOUrHB86',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:37',
                'updated_at' => '2021-05-29 20:36:37',
            ),
        ));
        
        
    }
}