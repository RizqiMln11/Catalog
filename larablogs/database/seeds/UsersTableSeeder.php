<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = App\User::create([
        	'name' => 'Rizqi maulana',
        	'email' => 'mojokerto11@gmail.com',
        	'password' => bcrypt('password'),
            'admin' => 1,
            'api_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9BdXRoXC9sb2dpbiIsImlhdCI6MTU2NzQ3NTg3MywiZXhwIjoxNTY3NDc5NDczLCJuYmYiOjE1Njc0NzU4NzMsImp0aSI6IldsNkFpNWpXSnZQVklNbzUiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.oOEepdKe50qhcCj1knDnmu3FLZ8uvhHSR8UzAS7amjU'
        ]);



        App\Profile::create([
        	'user_id' => $user->id,
        	'avatar' => 'uploads/avatars/ide.png',
        	'about' =>  'Saya Rizqi Mauana, Saya sekarang duduk di bangku Pelatihan Lab Akselerasi, Alumni SMAN 1 GEDEG angkatan
                         2017/2018, Saya jurusan ipa tapi saya lebih minat ke Dunia IT. harapan saya sukses di usia muda.',
            'vision' => "Menjadi Software House teknologi informasi yang mampu mendorong kemajuan industri telekomunikasi dan
                         pengembangan sumber daya manusia indonesia.",
            'mission' => "Sementara di Kosingi",
        	'facebook' => 'https://www.facebook.com/mass.jt',
        	'youtube' => 'https://www.youtube.com/channel/UCeWEivdnoYX0YcNruKO1cog'
        ]);
    }
}
