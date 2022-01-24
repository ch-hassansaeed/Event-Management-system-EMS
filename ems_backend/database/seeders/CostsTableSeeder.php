<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('costs')->delete();
        
        \DB::table('costs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_id' => 1,
                't_type' => 1,
                'normal' => 0,
                'silver' => 10,
                'gold' => 19,
                'platinum' => 49,
                'created_at' => '2021-05-29 14:56:24',
                'updated_at' => '2021-05-29 14:56:24',
            ),
            1 => 
            array (
                'id' => 8,
                'event_id' => 15,
                't_type' => 0,
                'normal' => 5,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:05:05',
                'updated_at' => '2021-05-30 17:05:05',
            ),
            2 => 
            array (
                'id' => 9,
                'event_id' => 16,
                't_type' => 1,
                'normal' => 0,
                'silver' => 10,
                'gold' => 20,
                'platinum' => 50,
                'created_at' => '2021-05-30 17:06:21',
                'updated_at' => '2021-05-30 17:06:21',
            ),
            3 => 
            array (
                'id' => 10,
                'event_id' => 17,
                't_type' => 0,
                'normal' => 100,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:07:53',
                'updated_at' => '2021-05-30 17:07:53',
            ),
            4 => 
            array (
                'id' => 11,
                'event_id' => 18,
                't_type' => 0,
                'normal' => 99,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:09:00',
                'updated_at' => '2021-05-30 17:09:00',
            ),
            5 => 
            array (
                'id' => 12,
                'event_id' => 19,
                't_type' => 0,
                'normal' => 150,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:10:34',
                'updated_at' => '2021-05-30 17:10:34',
            ),
            6 => 
            array (
                'id' => 13,
                'event_id' => 20,
                't_type' => 0,
                'normal' => 98,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:12:23',
                'updated_at' => '2021-05-30 17:12:23',
            ),
            7 => 
            array (
                'id' => 14,
                'event_id' => 21,
                't_type' => 0,
                'normal' => 98,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:13:54',
                'updated_at' => '2021-05-30 17:13:54',
            ),
            8 => 
            array (
                'id' => 15,
                'event_id' => 22,
                't_type' => 0,
                'normal' => 100,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:15:13',
                'updated_at' => '2021-05-30 17:15:13',
            ),
            9 => 
            array (
                'id' => 16,
                'event_id' => 23,
                't_type' => 0,
                'normal' => 30,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:16:23',
                'updated_at' => '2021-05-30 17:16:23',
            ),
            10 => 
            array (
                'id' => 17,
                'event_id' => 24,
                't_type' => 0,
                'normal' => 0,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-05-30 17:17:27',
                'updated_at' => '2021-05-30 17:17:27',
            ),
            11 => 
            array (
                'id' => 22,
                'event_id' => 29,
                't_type' => 0,
                'normal' => 120,
                'silver' => 0,
                'gold' => 0,
                'platinum' => 0,
                'created_at' => '2021-06-02 22:03:21',
                'updated_at' => '2021-06-02 22:03:21',
            ),
        ));
        
        
    }
}