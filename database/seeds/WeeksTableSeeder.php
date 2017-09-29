<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WeeksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 20; $i++) { 
            for ($x=1; $x <=10 ; $x++) { 
                DB::table('weeks')->insert([
                    'number' => $x,
                    'terminal_capacity' =>  $faker->text($maxNbChars = 50),
                    'conceptual' =>  $faker->text($maxNbChars = 50),
                    'procedimental' =>  $faker->text($maxNbChars = 50),
                    'actitudinal' =>  $faker->text($maxNbChars = 50),
                    'learning_activity' =>  $faker->text($maxNbChars = 50),
                    'evaluation_criterial' =>  $faker->text($maxNbChars = 50),
                    'evaluation_indicators' =>  $faker->text($maxNbChars = 50),
                    'previous_tasks' =>  $faker->text($maxNbChars = 50),
                    'course_id' => rand(1, 40)
                ]);
            }
        }
    }
}
