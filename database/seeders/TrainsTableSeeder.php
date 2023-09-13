<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for ($i=0; $i < 15; $i++) { 

            $train = new Train();

            $train->train_company = fake()->company();
            $train->departure_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure_time = fake()->dateTimeBetween('-3 day');
            $train->arrival_time = fake()->dateTimeBetween('-2 day');
            $train->train_number = fake()->randomNumber(5, true);
            $train->wagons = fake()->numberBetween(9, 20);
            $train->in_time = fake()->numberBetween(0 , 1);
            $train->deleted = 0;
            $train->save();
        }
    }
}
