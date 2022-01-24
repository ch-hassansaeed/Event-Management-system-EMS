<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Hassan Saeed',
                'email' => 'hassan@mail.com',
                'phone' => 12345678,
                'created_at' => '2021-05-29 15:20:59',
                'updated_at' => '2021-05-29 15:20:59',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'John mic',
                'email' => 'john@gmail.com',
                'phone' => 12345678,
                'created_at' => '2021-05-29 15:24:07',
                'updated_at' => '2021-05-29 15:24:07',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Mandy Joo',
                'email' => 'mandy@gmail.com',
                'phone' => 22345675,
                'created_at' => '2021-05-29 15:26:06',
                'updated_at' => '2021-05-29 15:26:06',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Manu1',
                'email' => 'manu1@man.in',
                'phone' => 5398345,
                'created_at' => '2021-05-30 14:08:53',
                'updated_at' => '2021-05-30 14:08:53',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Hassan Saeed2',
                'email' => 'hassan2@gmail.com',
                'phone' => 343525245,
                'created_at' => '2021-05-30 17:19:44',
                'updated_at' => '2021-05-30 17:19:44',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Hassan Saeed3',
                'email' => 'hassan3@gmail.com',
                'phone' => 42552,
                'created_at' => '2021-05-30 17:20:02',
                'updated_at' => '2021-05-30 17:20:02',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Tom22',
                'email' => 'tom22@xyz.com',
                'phone' => 23424545,
                'created_at' => '2021-05-30 17:48:56',
                'updated_at' => '2021-05-30 17:48:56',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Dany23',
                'email' => 'daniel23@xyz.com',
                'phone' => 23423495,
                'created_at' => '2021-05-30 18:05:18',
                'updated_at' => '2021-05-30 18:05:18',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Frontier43',
                'email' => 'frontier44@gmail.com',
                'phone' => 32422545,
                'created_at' => '2021-06-01 07:40:05',
                'updated_at' => '2021-06-01 07:40:05',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Dani55',
                'email' => 'dan55@gmail.com',
                'phone' => 349204,
                'created_at' => '2021-06-01 07:51:43',
                'updated_at' => '2021-06-01 07:51:43',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Samuel24',
                'email' => 'sam44@sam.co',
                'phone' => 42432347,
                'created_at' => '2021-06-01 18:23:06',
                'updated_at' => '2021-06-01 18:23:06',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Tomy Hall',
                'email' => 'hello53@tom.com',
                'phone' => 24897340,
                'created_at' => '2021-06-01 18:24:50',
                'updated_at' => '2021-06-01 18:24:50',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Ron Lee4',
                'email' => 'ron3@ron3.co',
                'phone' => 2348943,
                'created_at' => '2021-06-02 01:45:03',
                'updated_at' => '2021-06-02 01:45:03',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Donald44',
                'email' => 'donald44@gmail.com',
                'phone' => 42394234,
                'created_at' => '2021-06-02 19:36:31',
                'updated_at' => '2021-06-02 19:36:31',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'paul',
                'email' => 'paul@gmail.com',
                'phone' => 342525425,
                'created_at' => '2021-06-02 19:40:05',
                'updated_at' => '2021-06-02 19:40:05',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'James78',
                'email' => 'james78@jbd.com',
                'phone' => 32252524,
                'created_at' => '2021-06-02 19:54:26',
                'updated_at' => '2021-06-02 19:54:26',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Ferrari23',
                'email' => 'test@ferrari23.com',
                'phone' => 2328542,
                'created_at' => '2021-06-02 19:55:27',
                'updated_at' => '2021-06-02 19:55:27',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Rony67',
                'email' => 'ron67@mail.com',
                'phone' => 423864239,
                'created_at' => '2021-06-02 19:57:51',
                'updated_at' => '2021-06-02 19:57:51',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Hassan4',
                'email' => 'hassan4@gmail.com',
                'phone' => 23482634,
                'created_at' => '2021-06-02 20:01:22',
                'updated_at' => '2021-06-02 20:01:22',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Someone45',
                'email' => 'someone45@asd.com',
                'phone' => 3423432,
                'created_at' => '2021-06-02 20:04:26',
                'updated_at' => '2021-06-02 20:04:26',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Hassan5',
                'email' => 'hello@Hassan5.co',
                'phone' => 34282433,
                'created_at' => '2021-06-02 20:05:11',
                'updated_at' => '2021-06-02 20:05:11',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Hassan6',
                'email' => 'Hassan6@gmail.com',
                'phone' => 2348328,
                'created_at' => '2021-06-02 20:06:54',
                'updated_at' => '2021-06-02 20:06:54',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Tomy doll',
                'email' => 'tomdoll@tomdoll.com',
                'phone' => 23423333,
                'created_at' => '2021-06-02 20:07:53',
                'updated_at' => '2021-06-02 20:07:53',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'Sarah Jhon',
                'email' => 'sarah@gmail.com',
                'phone' => 3234234,
                'created_at' => '2021-06-02 20:40:29',
                'updated_at' => '2021-06-02 20:40:29',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'Daniel89',
                'email' => 'dan89@gmail.com',
                'phone' => 5345334,
                'created_at' => '2021-06-03 00:29:11',
                'updated_at' => '2021-06-03 00:29:11',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'Don56',
                'email' => 'don56@mail.com',
                'phone' => 34535445,
                'created_at' => '2021-06-03 01:47:33',
                'updated_at' => '2021-06-03 01:47:33',
            ),
        ));
        
        
    }
}