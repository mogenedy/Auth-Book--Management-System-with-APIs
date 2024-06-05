<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=\Faker\Factory::create();
        for($i=0;$i<50;$i++){
            Book::create([
                'name'=>$faker->sentence(3),
                'author'=>$faker->name,
                'published_at'=>$faker->date,
            ]);
    }
}
}