<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();

            $train->company = $faker->randomElement(['Trenitalia', 'Italo Treno', 'Frecciarossa']);

            $train->departure_station = $faker->randomElement(['Fiera Di Roma', 'La Giustiniana', 'Legnano', 'Acerra', 'Agropoli-Castellabate']);

            $train->arrival_station = $faker->randomElement(['Fiera Di Roma', 'La Giustiniana', 'Legnano', 'Acerra', 'Agropoli-Castellabate']);

            $train->departure_time = $faker->time();

            $train->arrival_time = $faker->time();

            $train->train_code = $faker->randomNumber(4, true);

            $train->carriages_number = $faker->numberBetween(4, 15);

            $train->on_time = $faker->boolean();

            $train->delay = $faker->numberBetween(0, 59);

            $train->delete = $faker->boolean();

            $train->save();
        }
    }
}
