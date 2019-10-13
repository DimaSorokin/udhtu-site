<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(StateTableSeed::class);
         $this->call(ApplicantTableSeed::class);
         $this->call(PhotoTableSeeder::class);
         $this->call(TagTableSeeder::class);
         $this->call(ArticleTableSeeder::class);
    }
}
