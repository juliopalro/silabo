<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 40; $i++) {
            DB::table('courses')->insert([
                'name' => $faker->text($maxNbChars = 200),
                'teacher_id' => rand(1, 20)
            ]);
        }
    }
}
