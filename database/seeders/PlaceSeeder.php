<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Barcelona',
            'Copenhagen',
            'London',
            'Madrid',
            'Miami',
            'Milano',
            'New York',
            'Paris',
            'Seoul',
            'Tokyo',
            'Los Angeles'
        ];

        foreach ($cities as $city) {
            DB::table('places')->insert([
                'city' => $city,
            ]);
        }
    
    

    
}

}