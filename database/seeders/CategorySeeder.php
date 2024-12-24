<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Membuat 10 kategori acak
        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => $faker->unique()->word()
            ]);
        }
    }
}
