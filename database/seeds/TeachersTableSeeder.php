<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeachersTableSeeder extends Seeder
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
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'last_name' => $faker->lastName
            ]);
        }
    }
}
