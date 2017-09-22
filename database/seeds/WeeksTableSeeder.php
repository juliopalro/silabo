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
                    'number' => 'semana '.$x,
                    'subject_id' => $i
                ]);
            }
        }
    }
}
