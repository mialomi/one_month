<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('seasons')->insert([
            'name' => 'Spring-Summer',
        ]);

        DB::table('seasons')->insert([
            'name' => 'Fall-Winter',
        ]);

        DB::table('seasons')->insert([
            'name'=> 'Mid-Season',
        ]);

    }
        
    
}
