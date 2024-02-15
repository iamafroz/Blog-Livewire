<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            category::insert([
                ['category_name'=> 'News'],
                ['category_name'=> 'Sports'],
                ['category_name'=> 'Politics'],
                ['category_name'=> 'Education'],
            ]);
    }
}
