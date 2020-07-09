<?php

use App\product;
use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        product::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            product::create([
                'name' => $faker->name,
                'code' => $faker->sentence,
                'price' => $faker->numberBetween(20,500),
                'status' =>'active',
                'body'=> $faker->paragraph,
            ]);
        }
    }
}
