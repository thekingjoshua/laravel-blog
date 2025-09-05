<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert(
            [
                [
                    "name" => 'technology',
                    "slug" => 'technology'
                ],
                [
                    "name" => 'lifestyle',
                    "slug" => 'lifestyle'
                ],
                [
                    "name" => 'entertainment',
                    "slug" => 'entertainment'
                ],
                [
                    "name" => 'health',
                    "slug" => 'health'
                ],
                [
                    "name" => 'news',
                    "slug" => 'news'
                ],
                [
                    "name" => 'travel',
                    "slug" => 'travel'
                ],
                [
                    "name" => 'sports',
                    "slug" => 'sports'
                ]
            ]
        );
    }
}
