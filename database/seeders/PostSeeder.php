<?php

namespace Database\Seeders;

use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $value){
            DB::table('posts')->insert([
                'title'=>$faker->text(20),
                'body'=>$faker->realTextBetween(200,600),
                'author'=>$faker->name,
                'views'=>$faker->numberBetween(2,4),
                'likes'=>$faker->numberBetween(2,4),
                'tags'=>$faker->numberBetween(1,10),
                'created_at'=>$faker->dateTime,
                'updated_at'=>$faker->dateTime
            ]);
        }
    }
}
