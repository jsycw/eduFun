<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $title = [
            "Human and Computer Interaction",
            "User Experience",
            "User Experience for Digital Immersive Technology",
            "Pattern Software Design",
            "Agile Software Development",
            "Code Reengineering"
        ];

        for ($i=0; $i < count($title); $i++) { 
            Article::create([
                "title" => $title[$i],
                "photo" => ($i+1) . ".jpg",
                "desc" => $faker->paragraph(rand(5,7)) . "\n\n" . $faker->paragraph(rand(6,8)),
                "date" => $faker->date(),
                "category_id" => $i < 3 ? 1 : 2,
                "author_id" => $i < 3 ? 1 : 2
            ]);
        }
    }
}
