<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('collections')->insert([
            'name' => 'Pret-a-Porter',
        ]);

        DB::table('collections')->insert([
            'name' => 'Haute Couture',
        ]);

        DB::table('collections')->insert([
            'name'=> 'Cruise-Resort',
        ]);

        DB::table('collections')->insert([
            'name'=> 'Pre-Fall',
        ]);
    }
}
