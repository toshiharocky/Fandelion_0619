<?php

use Illuminate\Database\Seeder;

class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gyms')->insert([
        [
            'user_id' => '1',
            'gymstatus_id' => '1',
            'title' => 'gymTest',
            'gym_desc' => 'this is a test',
            'gymType_id' => '1',
            'superHost_flg' => '0',
            'review_amount' => '15',
            'review_average' => '4.3',
            'guest_limit' => '2',
         ],
        [
            'user_id' => '2',
            'gymstatus_id' => '4',
            'title' => 'gymTest',
            'gym_desc' => 'this is a test',
            'gymType_id' => '1',
            'superHost_flg' => '0',
            'review_amount' => '15',
            'review_average' => '4.3',
            'guest_limit' => '2',
         ],
        [
            'user_id' => '3',
            'gymstatus_id' => '7',
            'title' => 'gymTest',
            'gym_desc' => 'this is a test',
            'gymType_id' => '1',
            'superHost_flg' => '0',
            'review_amount' => '15',
            'review_average' => '4.3',
            'guest_limit' => '2',
         ],
    ]);
        
    }
}
