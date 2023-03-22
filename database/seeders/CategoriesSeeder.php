<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        //Obtenemos el último id insertado
        $lastInsertedId = DB::table("categories")->max("id");
        //Generamos 10 elementos de tipo aleatorio.
        for ($i = $lastInsertedId; $i < $lastInsertedId + 10; $i++) {
            DB::table("categories")->insert(
                [
                    "id" => $i + 1,
                    //Creamos descuentos de hasta el 100% con dos decimales
                    "name" => $faker->word,
                    "created_at" => now(),
                    "updated_at" => now()
                ]
            );
        }
    }
}
