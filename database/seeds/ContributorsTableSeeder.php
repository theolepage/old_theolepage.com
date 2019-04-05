<?php

use Illuminate\Database\Seeder;

class ContributorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contributors')->insert([
            [
                'name' => 'Théo Lepage',
                'website_url' => 'https://thdoteo.com/about',
                'picture_url' => 'https://thdoteo.com/images/portrait.jpg'
            ],
            [
                'name' => 'Nathan Rousselot',
                'website_url' => 'https://github.com/RousselotN',
                'picture_url' => null
            ],
            [
                'name' => 'Arielle Lévi',
                'website_url' => 'https://github.com/ariellelevi',
                'picture_url' => null
            ],
            [
                'name' => 'Ferdinand Mom',
                'website_url' => 'https://github.com/3outeille',
                'picture_url' => null
            ],
            [
                'name' => 'Louis Chevalier',
                'website_url' => 'https://github.com/OXDBXKXO',
                'picture_url' => null
            ],
            [
                'name' => 'Maël Cravero',
                'website_url' => 'https://github.com/MaelCravero',
                'picture_url' => null
            ],
            [
                'name' => 'Léo Morice',
                'website_url' => null,
                'picture_url' => null
            ]
        ]);

        DB::table('contributor_project')->insert([
            [
                'project_id' => 1,
                'contributor_id' => 1
            ],
            [
                'project_id' => 2,
                'contributor_id' => 1
            ],
            [
                'project_id' => 3,
                'contributor_id' => 1
            ],
            [
                'project_id' => 4,
                'contributor_id' => 1
            ],
            [
                'project_id' => 5,
                'contributor_id' => 1
            ],
            [
                'project_id' => 6,
                'contributor_id' => 1
            ],
            [
                'project_id' => 7,
                'contributor_id' => 1
            ],
            [
                'project_id' => 8,
                'contributor_id' => 1
            ],
            [
                'project_id' => 9,
                'contributor_id' => 1
            ],
            [
                'project_id' => 9,
                'contributor_id' => 2
            ],
            [
                'project_id' => 9,
                'contributor_id' => 6
            ],
            [
                'project_id' => 9,
                'contributor_id' => 7
            ],
            [
                'project_id' => 10,
                'contributor_id' => 1
            ],
            [
                'project_id' => 10,
                'contributor_id' => 3
            ],
            [
                'project_id' => 10,
                'contributor_id' => 4
            ],
            [
                'project_id' => 10,
                'contributor_id' => 5
            ],
            [
                'project_id' => 11,
                'contributor_id' => 1
            ],
            [
                'project_id' => 12,
                'contributor_id' => 1
            ],
            [
                'project_id' => 13,
                'contributor_id' => 1
            ],
            [
                'project_id' => 14,
                'contributor_id' => 1
            ],
            [
                'project_id' => 15,
                'contributor_id' => 1
            ]
        ]);
    }
}
