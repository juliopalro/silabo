<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeachersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(BibliographiesTableSeeder::class);
        $this->call(WeeksTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
    }
}
