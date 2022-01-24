<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'The Tomorrowland',
                'catagory' => 'fun',
                'organizer' => 'TL Inc.',
                'location' => 'Mountain View, CA',
                'date' => '2021-05-15',
                'description' => 'Lorem Ipsum We are delighted and grateful to hear that the Belgian Government has given a realistic perspective for large festivals in Belgium towards the end of the summer. We want to study the guidelines and parameters from the National Government in the next days, so that we can properly communicate the different scenarios and implications. \\nWith a combination of vaccination and rapid testing at the door, we believe we can make Tomorrowland a safe place, which so many people have been looking forward to for so long. We will take every measure and guideline very seriously and apply all the right protocols.',
                'duration' => 5,
                'image_title' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => '2021-05-29 14:56:24',
                'updated_at' => '2021-05-29 14:56:24',
            ),
            1 => 
            array (
                'id' => 15,
                'name' => 'The Beach hack',
                'catagory' => 'fun',
                'organizer' => 'hillhacks',
                'location' => 'Miami',
                'date' => '2021-06-04',
                'description' => 'Lorem Ipsum HackbytheBeach is the hackathon organised in Quark, the annual technical festival of BITS Goa. Schedule. For the event schedule, visit https://bits-quark.org/ ...',
                'duration' => 2,
                'image_title' => 'https://images.unsplash.com/photo-1560359614-870d1a7ea91d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => '2021-05-30 17:05:05',
                'updated_at' => '2021-05-30 17:05:05',
            ),
            2 => 
            array (
                'id' => 16,
                'name' => 'SnowBoard Blazing',
                'catagory' => 'sports',
                'organizer' => 'The snow foundation',
                'location' => 'Himalayas',
                'date' => '2021-05-27',
                'description' => 'Lorem Ipsum Snowboarding is a recreational and competitive activity that involves descending a snow-covered slope while standing on a snowboard that is almost always ...',
                'duration' => 1,
                'image_title' => 'https://images.unsplash.com/photo-1612180466811-921a028fe665?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80',
                'created_at' => '2021-05-30 17:06:21',
                'updated_at' => '2021-05-30 17:06:21',
            ),
            3 => 
            array (
                'id' => 17,
                'name' => 'Dirt Rally',
                'catagory' => 'sports',
                'organizer' => 'DIRT org',
                'location' => 'Amazon',
                'date' => '2021-05-10',
                'description' => 'Lorem Ipsum DiRT Rally is the most authentic and thrilling rally game ever made, road-tested over 80 million miles by the DiRT community. It perfectly captures that white ...',
                'duration' => 1,
                'image_title' => 'https://images.unsplash.com/photo-1548536624-57fc3720f8a1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => '2021-05-30 17:07:53',
                'updated_at' => '2021-05-30 17:07:53',
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'Expo 2021',
                'catagory' => 'fun',
                'organizer' => 'DUBAI',
                'location' => 'Dubai',
                'date' => '2021-08-04',
                'description' => 'Lorem Ipsum Expo 2020 Dubai will host the world for 182 days, each one brimming with new experiences. It\'ll be a time to create, collaborate and innovate. And it\'s going to ...',
                'duration' => 182,
                'image_title' => 'https://images.unsplash.com/flagged/photo-1559717865-a99cac1c95d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80',
                'created_at' => '2021-05-30 17:09:00',
                'updated_at' => '2021-05-30 17:09:00',
            ),
            5 => 
            array (
                'id' => 19,
                'name' => 'Golf Week',
                'catagory' => 'sports',
                'organizer' => 'The Golf Club',
                'location' => 'Abu Dhabi',
                'date' => '2021-05-20',
                'description' => 'Lorem Ipsum 2020 Dubai will host the world for 182 days, each one brimming with new experiences. It\'ll be a time to create, collaborate and innovate. And it\'s going to ...',
                'duration' => 5,
                'image_title' => 'https://images.unsplash.com/photo-1587174486073-ae5e5cff23aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => '2021-05-30 17:10:34',
                'updated_at' => '2021-06-03 01:00:52',
            ),
            6 => 
            array (
                'id' => 20,
                'name' => 'Fifa World Cup',
                'catagory' => 'sports',
                'organizer' => 'World Cup Foundation',
                'location' => 'Qatar',
                'date' => '2022-06-23',
                'description' => 'Lorem Ipsum Keep up with the FIFA World Cup Qatar in Arabic! From the latest news to in-depth team profiles, exclusive interviews, ticketing information and more ...',
                'duration' => 90,
                'image_title' => 'https://images.unsplash.com/photo-1617144519956-bba853571334?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1045&q=80',
                'created_at' => '2021-05-30 17:12:23',
                'updated_at' => '2021-05-30 17:12:23',
            ),
            7 => 
            array (
                'id' => 21,
                'name' => 'Scuba fest 2020',
                'catagory' => 'sports',
                'organizer' => 'Marine world inc',
                'location' => 'Dubai',
                'date' => '2021-05-12',
                'description' => 'Lorem Ipsum Scuba diving is a mode of underwater diving where the diver uses an apparatus which is completely independent of surface supply to breathe underwater.',
                'duration' => 7,
                'image_title' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => '2021-05-30 17:13:54',
                'updated_at' => '2021-05-30 17:13:54',
            ),
            8 => 
            array (
                'id' => 22,
                'name' => 'Hockey Battle 2022',
                'catagory' => 'sports',
                'organizer' => 'WC foundation',
                'location' => 'Atlanta',
                'date' => '2021-05-31',
                'description' => 'Lorem Ipsum Hockey is a sport in which two teams play against each other by trying to manoeuvre a ball or a puck into the opponent\'s goal using a hockey stick.',
                'duration' => 3,
                'image_title' => 'https://images.unsplash.com/photo-1545471977-94cac22e71ed?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => '2021-05-30 17:15:13',
                'updated_at' => '2021-05-30 17:15:13',
            ),
            9 => 
            array (
                'id' => 23,
                'name' => 'Olympics 2022',
                'catagory' => 'sports',
                'organizer' => 'Japan',
                'location' => 'Tokyo',
                'date' => '2021-10-19',
                'description' => 'Lorem Ipsum The 2022 Summer Olympics, officially the Games of the XXXII Olympiad, and also known as Tokyo 2020, is an upcoming international multi-sport event scheduled to be held from 23 July to 8 August 2021 in Tokyo, Japan.',
                'duration' => 0,
                'image_title' => 'https://images.unsplash.com/photo-1569517282132-25d22f4573e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1433&q=80',
                'created_at' => '2021-05-30 17:16:23',
                'updated_at' => '2021-05-30 17:16:23',
            ),
            10 => 
            array (
                'id' => 24,
                'name' => 'WWDC \'21',
                'catagory' => 'fun',
                'organizer' => 'Apple',
                'location' => 'Online',
                'date' => '2021-06-07',
                'description' => 'Lorem Ipsum Apple Worldwide Developers Conference is an information technology conference held annually by Apple Inc. The conference is normally held in the San Jose Convention Center in California.',
                'duration' => 1,
                'image_title' => 'https://images.unsplash.com/photo-1491933382434-500287f9b54b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80',
                'created_at' => '2021-05-30 17:17:27',
                'updated_at' => '2021-05-30 17:17:27',
            ),
            11 => 
            array (
                'id' => 29,
                'name' => 'Jet Ski Festival 2020',
                'catagory' => 'sports',
                'organizer' => 'JET',
                'location' => 'Abu Dhabi',
                'date' => '2021-06-18',
                'description' => 'Lorem Ipsum Amazing that 2020 will mark our 20th raffle jet ski and the 13th JetFest. Incredible, as the goal back in the beginning was to create a true pwc destination ...',
                'duration' => 5,
                'image_title' => 'https://images.unsplash.com/photo-1564633351631-e85bd59a91af?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8amV0JTIwc2tpfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'created_at' => '2021-06-02 22:03:21',
                'updated_at' => '2021-06-02 22:03:21',
            ),
        ));
        
        
    }
}