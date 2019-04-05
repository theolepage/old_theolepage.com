<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Website',
                'color' => '#7baaf2'
            ],
            [
                'name' => 'Community',
                'color' => '#F5AEE2'
            ],
            [
                'name' => 'Game',
                'color' => '#7baaf2'
            ],
            [
                'name' => 'Library',
                'color' => '#97d190'
            ],
            [
                'name' => 'Software',
                'color' => '#7baaf2'
            ],
            [
                'name' => 'Tool',
                'color' => '#97d190'
            ],
            [
                'name' => 'Hardware',
                'color' => '#8c8c8c'
            ],
            [
                'name' => 'Mobile app',
                'color' => '#7baaf2'
            ]
        ]);
    }
}
