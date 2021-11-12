<?php

use Illuminate\Database\Seeder;
use App\Models\Journey;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class JourneysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $faker = Faker\Factory::create();
        
        for($i = 0; $i < 50; $i++)
        {
            $newJourney = new Journey();
            // $newJourney->fill($journeys);
            $newJourney->country = $faker->words(2,true);
            $newJourney->region = $faker->words(2,true);
            $newJourney->city = $faker->words(2,true);
            $newJourney->location = $faker->words(5,true);
            $newJourney->date_start = $faker->date('Y_m_d');
            $newJourney->duration = $faker->randomNumber(2,false);
            $newJourney->placement = $faker->paragraph(2);
            $newJourney->service = $faker->paragraph(2);
            $newJourney->description = $faker->text(400);
            $newJourney->available = $faker->numberBetween(0,1);
            $newJourney->price = $faker->randomFloat(2,1,999999);
            $newJourney->slug = Str::slug($newJourney->location, '-');
            $newJourney->save();
        }
    }
}
