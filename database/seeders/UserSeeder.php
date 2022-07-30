<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::factory()->count(10)->create();

//        DB::table('users')->insert([
//                'name' => Str::random(10),
//                'email' => Str::random(10) . ' @ ' . Str::random(5) . '.com',
//                'password' =>Hash::make('password'),
//          ]
//    );
    }
}
