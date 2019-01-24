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
        \App\Setting::create([
            'site_name' => "Medium App",
            'address' => 'Karachi, Pakistan',
            'contact_number' => '+923052483615',
            'contact_email' => 'rehman259@gmail.com'
        ]);
    }
}
