<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubjectsTableSeeder extends Seeder
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
            DB::table('subjects')->insert([
                'name' => $faker->text($maxNbChars = 200),
                'teacher_id' => $i
            ]);
        }
    }
}
