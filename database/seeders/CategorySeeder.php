<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            "Interactive Multimedia",
            "Software Engineering"
        ];

        for ($i=0; $i < 2; $i++) { 
            Category::create([
                "name" => $name[$i]
            ]);
        }

    }
}
