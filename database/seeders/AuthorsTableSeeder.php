<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                "name" => "Joshua Erughe",
                "email" => "joshuaerughe@gmail.com",
                "bio" => "A fullstack developer.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "John Doe",
                "email" => "johndoe@gmail.com",
                "bio" => "A passionate tech blogger and writer",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Jane Doe",
                "email" => "Janedoe@gmail.com",
                "bio" => "Loves writing about fashion and design",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
