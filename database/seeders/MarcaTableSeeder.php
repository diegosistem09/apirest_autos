<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Marca;
class MarcaTableSeeder extends Seeder
{
        // Let's truncate our existing records to start from scratch.
	public function run()
    {	        

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Marca::create([
                'nombre' => $faker->sentence,
                'fabricante' => $faker->paragraph,
                            ]);
        }
    }
}
