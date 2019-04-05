<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $now = new DateTime();

        DB::table('projects')->insert([
            [
                'name' => 'thdoteo.com',
                'title' => null,
                'description' => 'My website (or laboratory) on which you can learn more about my projects.',
                'about' => null,

                'color' => '#5C89DC',
                'technologies' => 'PHP (Laravel)',
                'progress' => '90',
                'status' => 1,
                'version' => '4.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-08-2010'),
                'updated_at' => $now,
                'category_id' => 1,

                'youtube_video_id' => null,
                'github_repo_username' => null,
                'github_repo_name' => null,
                'report_url' => null,
                'website_url' => 'https://thdoteo.com',
                'downloads_url' => null,
                'background_image_url' => '/uploads/thdoteo.com.png'
            ],
            [
                'name' => 'TSCraft',
                'title' => null,
                'description' => 'A Minecraft crew. For 6 years we have been making cool stuff on this game.',
                'about' => null,

                'color' => '#f6883e',
                'technologies' => null,
                'progress' => -1,
                'status' => 2,
                'version' => null,
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-06-2010'),
                'updated_at' => $now,
                'category_id' => 2,

                'youtube_video_id' => null,
                'github_repo_username' => null,
                'github_repo_name' => null,
                'report_url' => null,
                'website_url' => 'https://www.youtube.com/channel/UCQwiANpDL8s761GfsLcoRqA',
                'downloads_url' => null,
                'background_image_url' => '/uploads/tscraft.jpg'
            ],
            [
                'name' => 'voidMaze',
                'title' => null,
                'description' => 'A puzzle game built with Javascript and Three.js.',
                'about' => null,

                'color' => '#80d681',
                'technologies' => 'Javascript (Three.js)',
                'progress' => 100,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-02-2016'),
                'updated_at' => $now,
                'category_id' => 3,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'voidMaze',
                'report_url' => null,
                'website_url' => 'https://lab.thdoteo.com/voidmaze',
                'downloads_url' => null,
                'background_image_url' => 'https://raw.githubusercontent.com/thdoteo/voidMaze/master/screenshot.png'
            ],
            [
                'name' => 'php-random-avatars',
                'title' => null,
                'description' => 'PHP class to randomly generate simple avatars of 25 pixels.',
                'about' => null,

                'color' => '#1abc9c',
                'technologies' => 'PHP (GD)',
                'progress' => 100,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-09-2014'),
                'updated_at' => $now,
                'category_id' => 4,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'php-random-avatars',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => null
            ],
            [
                'name' => 'dictionary-generator',
                'title' => null,
                'description' => 'A dictionary generator written in C++, simple, fast and customizable.',
                'about' => null,

                'color' => '#34495e',
                'technologies' => 'C++',
                'progress' => 80,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-08-2016'),
                'updated_at' => $now,
                'category_id' => 6,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'dictionary-generator',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => null
            ],
            [
                'name' => 'docker-webdev',
                'title' => null,
                'description' => 'A docker config to develop with web technologies (PHP, MySQL).',
                'about' => null,

                'color' => '#d87580',
                'technologies' => 'Docker',
                'progress' => 100,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-01-2016'),
                'updated_at' => $now,
                'category_id' => 6,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'docker-webdev',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => null
            ],
            [
                'name' => 'vagrant-webdev',
                'title' => null,
                'description' => 'A vagrant VM to develop with web technologies (PHP, MySQL).',
                'about' => null,

                'color' => '#d87580',
                'technologies' => 'Vagrant',
                'progress' => 100,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-01-2016'),
                'updated_at' => $now,
                'category_id' => 6,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'vagrant-webdev',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => null
            ],
            [
                'name' => 'Tornado',
                'title' => null,
                'description' => 'My first computer built to meet my intensive use.',
                'about' => null,

                'color' => '#b782ce',
                'technologies' => null,
                'progress' => 100,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-06-2014'),
                'updated_at' => $now,
                'category_id' => 7,

                'youtube_video_id' => null,
                'github_repo_username' => null,
                'github_repo_name' => null,
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => '/uploads/tornado.jpg'
            ],
            [
                'name' => 'CantStopDriving',
                'title' => 'Can\'t Stop Driving',
                'description' => 'One player drives while the other is building the road.',
                'about' => null,

                'color' => '#f2bd41',
                'technologies' => 'Unity',
                'progress' => 100,
                'status' => 0,
                'version' => '3.0',
                'large' => true,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-01-2018'),
                'updated_at' => $now,
                'category_id' => 3,

                'youtube_video_id' => 'mf-ioBtAaUg',
                'github_repo_username' => 'AllOfTheAbove',
                'github_repo_name' => 'CantStopDriving',
                'report_url' => null,
                'website_url' => 'https://cantstopdriving.thdoteo.com/',
                'downloads_url' => 'https://cantstopdriving.thdoteo.com/play.html',
                'background_image_url' => '/uploads/tornado.jpg'
            ],
            [
                'name' => 'OCR',
                'title' => 'Optical Character Recognition',
                'description' => 'An Optical Character Recognition software written in C as part of a student project.',
                'about' => null,

                'color' => '#000000',
                'technologies' => 'C',
                'progress' => 80,
                'status' => 0,
                'version' => '2.0',
                'large' => true,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-09-2018'),
                'updated_at' => $now,
                'category_id' => 5,

                'youtube_video_id' => null,
                'github_repo_username' => 'NoneOfAllOfTheAbove',
                'github_repo_name' => 'OCR',
                'report_url' => 'https://github.com/NoneOfAllOfTheAbove/OCR/raw/master/docs/final-report.pdf',
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => 'https://raw.githubusercontent.com/NoneOfAllOfTheAbove/OCR/master/docs/screenshot.png'
            ],
            [
                'name' => 'web-experiments',
                'title' => null,
                'description' => 'A collection of small web experiments.',
                'about' => null,

                'color' => '#cef241',
                'technologies' => 'CSS, Javascript',
                'progress' => -1,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-12-2018'),
                'updated_at' => $now,
                'category_id' => 4,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'web-experiments',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => 'https://raw.githubusercontent.com/thdoteo/experiments/master/clock/screenshot.png'
            ],
            [
                'name' => 'FaceDetection',
                'title' => null,
                'description' => 'Simple C++ program to detect human faces in an image.',
                'about' => null,

                'color' => '#f4777a',
                'technologies' => 'C++',
                'progress' => -1,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-12-2018'),
                'updated_at' => $now,
                'category_id' => 5,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'FaceDetection',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => 'https://raw.githubusercontent.com/thdoteo/FaceDetection/master/docs/screenshot.png'
            ],
            [
                'name' => 'php-framework',
                'title' => null,
                'description' => 'A PHP framework to start developping apps faster.',
                'about' => null,

                'color' => '#8877f4',
                'technologies' => 'PHP',
                'progress' => 70,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-01-2019'),
                'updated_at' => $now,
                'category_id' => 4,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'php-framework',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => null
            ],
            [
                'name' => 'Inaudible',
                'title' => null,
                'description' => 'Android application generating music depending on Wi-Fi networks surrounding you.',
                'about' => null,

                'color' => '#9FFFD2',
                'technologies' => 'Java',
                'progress' => 100,
                'status' => 0,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-01-2016'),
                'updated_at' => $now,
                'category_id' => 8,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'Inaudible',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => 'https://raw.githubusercontent.com/thdoteo/Inaudible/master/screenshot.png'
            ],
            [
                'name' => 'Brainstorming',
                'title' => null,
                'description' => 'Sail through algorithms',
                'about' => null,

                'color' => '#4f77bc',
                'technologies' => null,
                'progress' => 10,
                'status' => 1,
                'version' => '1.0',
                'large' => false,
                'published' => true,
                'creation_date' => DateTime::createFromFormat('j-m-Y', '01-01-2018'),
                'updated_at' => $now,
                'category_id' => 6,

                'youtube_video_id' => null,
                'github_repo_username' => 'thdoteo',
                'github_repo_name' => 'Brainstorming',
                'report_url' => null,
                'website_url' => null,
                'downloads_url' => null,
                'background_image_url' => null
            ]
        ]);
    }
}
