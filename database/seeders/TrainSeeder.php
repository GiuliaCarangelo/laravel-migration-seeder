<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ( $i = 0; $i <= 20; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->date();
            $train->departure_time = $faker->time();
            $train->arrival_date = $faker->date();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->regexify('[A-Z]{3}[0-9]{3}');
            $train->total_carriages = $faker->numberBetween(1, 13);
            $train->on_time = $faker->boolean(50);
            $train->cancelled = $faker->boolean(90);
            $train->save();
        }
    }
}
