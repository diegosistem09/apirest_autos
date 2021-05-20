<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Auto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Auto::create([
                'placa' => $faker->sentence,
                'num_pasajeros' => 20,
                'estado'=>1,
                'marca'=>$faker->paragraph,
                'color'=>$faker->sentence,
            ]);
        }
    }
}
