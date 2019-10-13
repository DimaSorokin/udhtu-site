<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            [
                'img' => "https://images.unsplash.com/photo-1565100030119-bd222ef4fb01?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max",
                'desc' => "images",
                'cat_id' => 1
            ],
            [
                'img' => "https://images.unsplash.com/photo-1565755370302-e30ef892495d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max",
                'desc' => "images",
                'cat_id' => 1
            ],
            [
                'img' => "https://images.unsplash.com/photo-1564989570650-b6e2b40f225a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max",
                'desc' => "images",
                'cat_id' => 2
            ],
            [
                'img' => "https://images.unsplash.com/photo-1565364384073-29d6d4465bdb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max",
                'desc' => "images",
                'cat_id' => 3
            ],
        ];

        DB::table('photos')->insert($photos);
    }
}
