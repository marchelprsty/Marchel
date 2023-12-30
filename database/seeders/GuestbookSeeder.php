<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuestbookSeeder extends Seeder
{
    public function run()
    {
        // $faker = Faker::create();

        // foreach (range(1, 10) as $index) {
        //     DB::table('guestbooks')->insert([
        //         'name' => $faker->name,
        //         'from' => $faker->city,
        //         'agenda' => $faker->text,
        //         'updated_at' => now(),
        //         'created_at' => now(),
        //     ]);
        \App\Models\Guestbook::factory()->count(10)->create();
        
    }
}