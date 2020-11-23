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
        App\Setting::create([
        	'site_name' =>  ' Laravels Blog ',
        	'address' => 'Surabaya, Indonesia',
        	'contact_number' => '+6287860526291',
        	'contact_email' =>  'Nabras@code@1gmail.com'

        ]);
    }
}
