<?php

use App\customer;
use Illuminate\Database\Seeder;

class customesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        customer::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            customer::create([
                'name' => $faker->name,
                'last name' => $faker->lastName,
                'document' => $faker->sentence,
            ]);
        }
    }
}
