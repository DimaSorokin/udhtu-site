<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => "Защиты дипломов",
            ],
            [
                'name' => "Защиты дипломов1",
            ],
            [
                'name' => "Спорт",
            ],
        ];

        DB::table('tags')->insert($tags);
    }
}
