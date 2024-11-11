<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        $specialist = [
            "Interactive Multimedia Specialist",
            "Software Engineering Specialist"
        ];

        for ($i=0; $i<2; $i++) { 
            Author::create([
                "name" => $faker->name,
                "photo" => "author" . ($i+1) . ".jpg",
                "specialist" => $specialist[$i] //[rand($min,$max)]
            ]);
        }
    }
}
