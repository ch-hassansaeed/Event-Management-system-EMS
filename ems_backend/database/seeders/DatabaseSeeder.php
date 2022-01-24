<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CostsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(SalesTableSeeder::class);
    }
}
