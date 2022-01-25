<?php

use Faker\Generator as Faker;
use App\Traveller;
use Illuminate\Database\Seeder;

class TravellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $new_house = new Traveller();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->hotel = $faker->company();
            $new_house->description = $faker->text(200);
            $new_house->price = $faker->numberBetween(200,50000);
            $new_house->save();
        }

        
    }
}
