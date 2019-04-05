<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'alert_enabled' => true,
            'alert_text' => 'I am currently working on thdoteo.com. Some features may be unavailable for the moment.'
        ]);
    }
}
