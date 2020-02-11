<?php

use Illuminate\Database\Seeder;

class CreateHomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $houses = [
            [
                'province' => 'BC',
                'city' => 'Delta',
                'address' => '6555 Wade Road',
                'postal_code' => 'V4E 2V4',
                'type' => 'house',
                'bathrooms' => 3,
                'bedrooms' => 4,
                'floor_space' => 15000,
                'price' => 1000000,
            ],
            [
                'province' => 'BC',
                'city' => 'Surrey',
                'address' => '505-8695 160TH STREET',
                'postal_code' => 'V4N 1G4',
                'type' => 'apartment',
                'bathrooms' => 2,
                'bedrooms' => 2,
                'floor_space' => 886,
                'price' => 473800,
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '501-1515 HOMER MEWS',
                'postal_code' => 'V6Z 3E8',
                'type' => 'apartment',
                'bathrooms' => 4,
                'bedrooms' => 3,
                'floor_space' => 2183,
                'price' => 4980000,
            ]
        ];
        foreach($houses as $house) {
            Home::create($house);
        }
    }
}
