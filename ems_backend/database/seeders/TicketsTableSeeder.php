<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tickets')->delete();
        
        \DB::table('tickets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_id' => 1,
                'customer_id' => 2,
                't_type' => 2,
                'no_of_tickets' => 5,
                'costs' => 95,
                'created_at' => '2021-05-29 15:20:59',
                'updated_at' => '2021-05-29 15:20:59',
            ),
            1 => 
            array (
                'id' => 2,
                'event_id' => 1,
                'customer_id' => 3,
                't_type' => 3,
                'no_of_tickets' => 4,
                'costs' => 195,
                'created_at' => '2021-05-29 15:24:07',
                'updated_at' => '2021-05-29 15:24:07',
            ),
            2 => 
            array (
                'id' => 3,
                'event_id' => 1,
                'customer_id' => 4,
                't_type' => 1,
                'no_of_tickets' => 5,
                'costs' => 95,
                'created_at' => '2021-05-29 15:26:06',
                'updated_at' => '2021-05-29 15:26:06',
            ),
            3 => 
            array (
                'id' => 4,
                'event_id' => 1,
                'customer_id' => 5,
                't_type' => 3,
                'no_of_tickets' => 4,
                'costs' => 196,
                'created_at' => '2021-05-30 14:08:54',
                'updated_at' => '2021-05-30 14:08:54',
            ),
            4 => 
            array (
                'id' => 5,
                'event_id' => 24,
                'customer_id' => 6,
                't_type' => 0,
                'no_of_tickets' => 3,
                'costs' => 0,
                'created_at' => '2021-05-30 17:19:44',
                'updated_at' => '2021-05-30 17:19:44',
            ),
            5 => 
            array (
                'id' => 6,
                'event_id' => 16,
                'customer_id' => 7,
                't_type' => 2,
                'no_of_tickets' => 2,
                'costs' => 40,
                'created_at' => '2021-05-30 17:20:02',
                'updated_at' => '2021-05-30 17:20:02',
            ),
            6 => 
            array (
                'id' => 7,
                'event_id' => 1,
                'customer_id' => 8,
                't_type' => 3,
                'no_of_tickets' => 5,
                'costs' => 245,
                'created_at' => '2021-05-30 17:48:56',
                'updated_at' => '2021-05-30 17:48:56',
            ),
            7 => 
            array (
                'id' => 8,
                'event_id' => 1,
                'customer_id' => 9,
                't_type' => 3,
                'no_of_tickets' => 5,
                'costs' => 245,
                'created_at' => '2021-05-30 18:05:18',
                'updated_at' => '2021-05-30 18:05:18',
            ),
            8 => 
            array (
                'id' => 9,
                'event_id' => 18,
                'customer_id' => 10,
                't_type' => 0,
                'no_of_tickets' => 2,
                'costs' => 198,
                'created_at' => '2021-06-01 07:40:05',
                'updated_at' => '2021-06-01 07:40:05',
            ),
            9 => 
            array (
                'id' => 10,
                'event_id' => 17,
                'customer_id' => 11,
                't_type' => 0,
                'no_of_tickets' => 5,
                'costs' => 500,
                'created_at' => '2021-06-01 07:51:43',
                'updated_at' => '2021-06-01 07:51:43',
            ),
            10 => 
            array (
                'id' => 11,
                'event_id' => 1,
                'customer_id' => 12,
                't_type' => 2,
                'no_of_tickets' => 4,
                'costs' => 76,
                'created_at' => '2021-06-01 18:23:06',
                'updated_at' => '2021-06-01 18:23:06',
            ),
            11 => 
            array (
                'id' => 12,
                'event_id' => 16,
                'customer_id' => 13,
                't_type' => 2,
                'no_of_tickets' => 6,
                'costs' => 120,
                'created_at' => '2021-06-01 18:24:50',
                'updated_at' => '2021-06-01 18:24:50',
            ),
            12 => 
            array (
                'id' => 13,
                'event_id' => 17,
                'customer_id' => 14,
                't_type' => 0,
                'no_of_tickets' => 1,
                'costs' => 100,
                'created_at' => '2021-06-02 01:45:03',
                'updated_at' => '2021-06-02 01:45:03',
            ),
            13 => 
            array (
                'id' => 14,
                'event_id' => 18,
                'customer_id' => 15,
                't_type' => 0,
                'no_of_tickets' => 5,
                'costs' => 495,
                'created_at' => '2021-06-02 19:36:31',
                'updated_at' => '2021-06-02 19:36:31',
            ),
            14 => 
            array (
                'id' => 15,
                'event_id' => 20,
                'customer_id' => 16,
                't_type' => 0,
                'no_of_tickets' => 19,
                'costs' => 1862,
                'created_at' => '2021-06-02 19:40:05',
                'updated_at' => '2021-06-02 19:40:05',
            ),
            15 => 
            array (
                'id' => 16,
                'event_id' => 1,
                'customer_id' => 17,
                't_type' => 1,
                'no_of_tickets' => 33,
                'costs' => 330,
                'created_at' => '2021-06-02 19:54:26',
                'updated_at' => '2021-06-02 19:54:26',
            ),
            16 => 
            array (
                'id' => 17,
                'event_id' => 19,
                'customer_id' => 18,
                't_type' => 0,
                'no_of_tickets' => 5,
                'costs' => 750,
                'created_at' => '2021-06-02 19:55:27',
                'updated_at' => '2021-06-02 19:55:27',
            ),
            17 => 
            array (
                'id' => 18,
                'event_id' => 19,
                'customer_id' => 19,
                't_type' => 0,
                'no_of_tickets' => 1,
                'costs' => 150,
                'created_at' => '2021-06-02 19:57:51',
                'updated_at' => '2021-06-02 19:57:51',
            ),
            18 => 
            array (
                'id' => 19,
                'event_id' => 21,
                'customer_id' => 20,
                't_type' => 0,
                'no_of_tickets' => 3,
                'costs' => 294,
                'created_at' => '2021-06-02 20:01:22',
                'updated_at' => '2021-06-02 20:01:22',
            ),
            19 => 
            array (
                'id' => 20,
                'event_id' => 22,
                'customer_id' => 21,
                't_type' => 0,
                'no_of_tickets' => 2,
                'costs' => 200,
                'created_at' => '2021-06-02 20:04:26',
                'updated_at' => '2021-06-02 20:04:26',
            ),
            20 => 
            array (
                'id' => 21,
                'event_id' => 23,
                'customer_id' => 22,
                't_type' => 0,
                'no_of_tickets' => 3,
                'costs' => 90,
                'created_at' => '2021-06-02 20:05:11',
                'updated_at' => '2021-06-02 20:05:11',
            ),
            21 => 
            array (
                'id' => 22,
                'event_id' => 15,
                'customer_id' => 23,
                't_type' => 0,
                'no_of_tickets' => 20,
                'costs' => 100,
                'created_at' => '2021-06-02 20:06:54',
                'updated_at' => '2021-06-02 20:06:54',
            ),
            22 => 
            array (
                'id' => 23,
                'event_id' => 19,
                'customer_id' => 24,
                't_type' => 0,
                'no_of_tickets' => 4,
                'costs' => 600,
                'created_at' => '2021-06-02 20:07:53',
                'updated_at' => '2021-06-02 20:07:53',
            ),
            23 => 
            array (
                'id' => 25,
                'event_id' => 24,
                'customer_id' => 26,
                't_type' => 0,
                'no_of_tickets' => 3,
                'costs' => 0,
                'created_at' => '2021-06-02 20:40:29',
                'updated_at' => '2021-06-02 20:40:29',
            ),
            24 => 
            array (
                'id' => 26,
                'event_id' => 19,
                'customer_id' => 27,
                't_type' => 0,
                'no_of_tickets' => 1,
                'costs' => 150,
                'created_at' => '2021-06-03 00:29:11',
                'updated_at' => '2021-06-03 00:29:11',
            ),
            25 => 
            array (
                'id' => 27,
                'event_id' => 22,
                'customer_id' => 28,
                't_type' => 0,
                'no_of_tickets' => 2,
                'costs' => 200,
                'created_at' => '2021-06-03 01:47:33',
                'updated_at' => '2021-06-03 01:47:33',
            ),
        ));
        
        
    }
}