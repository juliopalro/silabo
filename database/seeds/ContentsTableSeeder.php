<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 12; $i++) { 
            for ($x=1; $x <= 3 ; $x++) { 
                DB::table('contents')->insert([
                    'title' => $faker->text(200),
                    'content' => $faker->text(300),
                    'week_id' => $i
                ]);
            }
        }
    }
}
