<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25 ; $i++) { 
            $comic = new Comic();
            $comic->title = $faker->sentence(3);
            $comic->author = $faker->name();
            $comic->publisher = $faker->company();
            $comic->release_date = $faker->date();
            $comic->description = $faker->paragraph(4);
            $comic->price = $faker->randomFloat(2, 1, 100);
           
            $comic->save();
        }
    }
}
