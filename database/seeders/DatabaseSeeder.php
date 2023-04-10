<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'TempatBersua',
            'email'=>'tempatbersua@gmail.com',
            'password'=>bcrypt('123'),
            'role'=>'superadmin',
            'status'=>'not logged in',                                                                                                  
            'foto'=>'logo.png',
        ]);
    }
}
