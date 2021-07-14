<?php

use Illuminate\Database\Seeder;

class GymImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gym_images = factory(App\GymImage::class, 600)->create();
    }
}
