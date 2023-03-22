<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        //Obtenemos el último id insertado
        $lastInsertedId = DB::table("books")->max("id");
        //Generamos 10 elementos de tipo aleatorio.
        for ($i = $lastInsertedId; $i < $lastInsertedId + 10; $i++) {
            DB::table("books")->insert(
                [
                    "id" => $i + 1,
                    //Creamos descuentos de hasta el 100% con dos decimales
                    "isbn" => $faker->isbn10,
                    "title" => $faker->sentence($nbWords = 4, $variableNbWords = true),
                    "author" => $faker->name,
                    "published_date" => $faker->date(),
                    "description" => $faker->text,
                    "price" => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 30),
                    "created_at" => now(),
                    "updated_at" => now()
                ]
            );
        }
    }
}
