<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sales')->delete();
        
        \DB::table('sales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_id' => 1,
                'n_sold' => 0,
                's_sold' => 38,
                'g_sold' => 9,
                'p_sold' => 22,
                'total_sold' => 69,
                'total_revenue' => 1578,
                'created_at' => '2021-05-29 14:56:24',
                'updated_at' => '2021-06-02 20:11:36',
            ),
            1 => 
            array (
                'id' => 15,
                'event_id' => 15,
                'n_sold' => 20,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 20,
                'total_revenue' => 100,
                'created_at' => '2021-05-30 17:05:05',
                'updated_at' => '2021-06-02 20:06:54',
            ),
            2 => 
            array (
                'id' => 16,
                'event_id' => 16,
                'n_sold' => 0,
                's_sold' => 0,
                'g_sold' => 8,
                'p_sold' => 0,
                'total_sold' => 8,
                'total_revenue' => 160,
                'created_at' => '2021-05-30 17:06:21',
                'updated_at' => '2021-06-01 18:24:50',
            ),
            3 => 
            array (
                'id' => 17,
                'event_id' => 17,
                'n_sold' => 6,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 6,
                'total_revenue' => 600,
                'created_at' => '2021-05-30 17:07:53',
                'updated_at' => '2021-06-02 01:45:03',
            ),
            4 => 
            array (
                'id' => 18,
                'event_id' => 18,
                'n_sold' => 7,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 7,
                'total_revenue' => 693,
                'created_at' => '2021-05-30 17:09:00',
                'updated_at' => '2021-06-02 19:36:31',
            ),
            5 => 
            array (
                'id' => 19,
                'event_id' => 19,
                'n_sold' => 11,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 11,
                'total_revenue' => 1650,
                'created_at' => '2021-05-30 17:10:34',
                'updated_at' => '2021-06-03 00:29:11',
            ),
            6 => 
            array (
                'id' => 20,
                'event_id' => 20,
                'n_sold' => 19,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 19,
                'total_revenue' => 1862,
                'created_at' => '2021-05-30 17:12:23',
                'updated_at' => '2021-06-02 19:40:05',
            ),
            7 => 
            array (
                'id' => 21,
                'event_id' => 21,
                'n_sold' => 3,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 3,
                'total_revenue' => 294,
                'created_at' => '2021-05-30 17:13:54',
                'updated_at' => '2021-06-02 20:01:22',
            ),
            8 => 
            array (
                'id' => 22,
                'event_id' => 22,
                'n_sold' => 4,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 4,
                'total_revenue' => 400,
                'created_at' => '2021-05-30 17:15:13',
                'updated_at' => '2021-06-03 01:47:33',
            ),
            9 => 
            array (
                'id' => 23,
                'event_id' => 23,
                'n_sold' => 3,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 3,
                'total_revenue' => 90,
                'created_at' => '2021-05-30 17:16:23',
                'updated_at' => '2021-06-02 20:05:11',
            ),
            10 => 
            array (
                'id' => 24,
                'event_id' => 24,
                'n_sold' => 6,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 6,
                'total_revenue' => 0,
                'created_at' => '2021-05-30 17:17:27',
                'updated_at' => '2021-06-02 20:40:29',
            ),
            11 => 
            array (
                'id' => 29,
                'event_id' => 29,
                'n_sold' => 0,
                's_sold' => 0,
                'g_sold' => 0,
                'p_sold' => 0,
                'total_sold' => 0,
                'total_revenue' => 0,
                'created_at' => '2021-06-02 22:03:21',
                'updated_at' => '2021-06-02 22:03:21',
            ),
        ));
        
        
    }
}