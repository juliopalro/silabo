<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BibliographiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $edicion = array('1ra', '2da', '6ta', '7ma', '8va', '9na', '10ma');
        for ($i=1; $i <= 20; $i++) { 
            DB::table('bibliographies')->insert([
                'author' => $faker->name($gender = 'female'),
                'title' => $faker->sentence($nbWords = 20, $variableNbWords = true),
                'edition' => '2da',
                'country' => $faker->country,
                'editorial' => $faker->streetName,
                'year' => $faker->year($max = 'now'),
                'pages_number' => $faker->numberBetween($min = 100, $max = 900),
                'course_id' => rand(1, 40)
            ]);
        }
    }
}
