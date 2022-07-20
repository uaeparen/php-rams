<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('tags')->insert([
                'name'=>$faker->city,
                'slug'=>$faker->slug,
                'created_at'=>$faker->dateTime,
                'updated_at'=>$faker->dateTime
            ]);
        }
    }
}
