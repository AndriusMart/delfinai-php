<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as F;
use Carbon\Carbon;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();
        $faker = F::create('lt_LT');
        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time,
            'updated_at' => $time,
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time,
            'updated_at' => $time,
            'role' => 10,
        ]);


        foreach (['Total Recall 2', 'Tom and Tom', 'Cobra and Robocop 4', 'Shark and Cats', 'Blue Gnom', 'Lara and Tombs'] as $movie) {
            DB::table('movies')->insert([
                'title' => $movie,
                'price' => rand(100, 1000) / 100,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time,
            ]);
        }

        foreach (range(1, 22) as $_) {
            DB::table('comments')->insert([
                'post' => $faker->paragraph(rand(1, 10)),
                'movie_id' => rand(1, 6),
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time,
            ]);
        }
    }
}
