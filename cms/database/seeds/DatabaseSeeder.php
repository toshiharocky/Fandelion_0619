<?php

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
        $this->call(GymStatusTableSeeder::class);
        $this->call(MemStatusTableSeeder::class);
        // $this->call(GymTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(GymTypeTableSeeder::class);
        $this->call(GymAreaTableSeeder::class);
        $this->call(GuestGenderTableSeeder::class);
        $this->call(CancelPolicyTableSeeder::class);
    }
}
