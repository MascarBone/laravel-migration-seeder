<?php

use Illuminate\Database\Seeder;
use App\Models\Journey;
use Illuminate\Support\Str;

class JourneysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $journeys = [
            'country'=>'country',
            'region'=>'region',
            'city'=>'city',
            'location'=>'location di prova',
            'date_start'=>'2021/10/20',
            'duration'=>10,
            'placement'=>'pacement',
            'service'=>'service',
            'description'=>'description',
            'available'=>true,
            'price'=>19.99
        ];

        for($i = 0; $i < 50; $i++)
        {
            $newJourney = new Journey();
            $newJourney->fill($journeys);
            $newJourney->slug = Str::slug($newJourney->location, '-');
            $newJourney->save();
        }
    }
}
