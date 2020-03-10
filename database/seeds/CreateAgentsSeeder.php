<?php

use Illuminate\Database\Seeder;
use App\Agent;

class CreateAgentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $agents = [
            [
                'province' => 'BC',
                'city' => 'Delta',
                'first_name' => 'Ariya',
                'last_name' => 'Byrne',
                'email' => 'aByrne@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'first_name' => 'Rimsha',
                'last_name' => 'Valenzuela',
                'email' => 'rValenzuela@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'first_name' => 'Dalia',
                'last_name' => 'Henry',
                'email' => 'dHenry@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Langley',
                'first_name' => 'Sebastien',
                'last_name' => 'Walsh',
                'email' => 'sWalsh@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Langley',
                'first_name' => 'Mali',
                'last_name' => 'Raymond',
                'email' => 'mRaymond@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Surrey',
                'first_name' => 'Alfie',
                'last_name' => 'Sampson',
                'email' => 'aSampson@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Surrey',
                'first_name' => 'Sheikh',
                'last_name' => 'Southern',
                'email' => 'sSouthern@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Burnaby',
                'first_name' => 'Wiktoria',
                'last_name' => 'Meadows',
                'email' => 'wMeadows@laravelrealtor.com',
                'homes' => []
            ],
            [
                'province' => 'BC',
                'city' => 'Burnaby',
                'first_name' => 'Dennis',
                'last_name' => 'Healy',
                'email' => 'dHealy@laravelrealtor.com',
                'homes' => []
            ],
        ];

        foreach($agents as $agent) {
            Agent::create($agent);
        }
    }
}
