<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            'brand_name' => 'Chanel',
            'creative_director' => 'Virgine Viard' ,
            'headquarters' => 'Paris',
            'established_year' => '1910',
            'website' => 'https://www.chanel.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Valentino',
            'creative_director' => 'Pier Paolo Piccioli' ,
            'headquarters' => 'Roma',
            'established_year' => '1954',
            'website' => 'https://www.valentino.com/es-es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Isabel Marant',
            'creative_director' => 'Isabel Marant' ,
            'headquarters' => 'Paris',
            'established_year' => '1994',
            'website' => 'https://www.isabelmarant.com/es',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Chanel',
            'creative_director' => 'Virgine Viard' ,
            'headquarters' => 'Paris',
            'established_year' => '1910',
            'website' => 'https://www.chanel.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Louis Vuitton',
            'creative_director' => 'Nicolas Guesquière' ,
            'headquarters' => 'Paris',
            'established_year' => '1854',
            'website' => 'https://es.louisvuitton.com',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Alexander McQueen',
            'creative_director' => 'Sarah Burton' ,
            'headquarters' => 'London',
            'established_year' => '1992',
            'website' => 'https://www.alexandermcqueen.com/en-gb',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Loewe',
            'creative_director' => 'Jonathan Anderson' ,
            'headquarters' => 'Madrid',
            'established_year' => '1846',
            'website' => 'https://www.loewe.com/eur/es/home',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Schiaparelli',
            'creative_director' => 'Daniel Roseberry' ,
            'headquarters' => 'Paris',
            'established_year' => '1927',
            'website' => 'https://www.schiaparelli.com/en',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Givenchy',
            'creative_director' => 'Matthew M. Williams' ,
            'headquarters' => 'Paris',
            'established_year' => '1927',
            'website' => 'https://www.givenchy.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Chloé',
            'creative_director' => 'Chemena Kamali' ,
            'headquarters' => 'Paris',
            'established_year' => '1952',
            'website' => 'https://www.chloe.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Versace',
            'creative_director' => 'Donatella Versace' ,
            'headquarters' => 'Milano',
            'established_year' => '1978',
            'website' => 'https://www.versace.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Balmain',
            'creative_director' => 'Olivier Rousteing' ,
            'headquarters' => 'Paris',
            'established_year' => '1945',
            'website' => 'https://www.balmain.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Miu Miu',
            'creative_director' => 'Miuccia Prada' ,
            'headquarters' => 'Milano',
            'established_year' => '1993',
            'website' => 'https://www.miumiu.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Prada',
            'creative_director' => 'Miuccia Prada' ,
            'headquarters' => 'Milano',
            'established_year' => '1913',
            'website' => 'https://www.prada.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Saint Laurent',
            'creative_director' => 'Anthony Vaccarello' ,
            'headquarters' => 'Paris',
            'established_year' => '1961',
            'website' => 'https://www.ysl.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Christian Dior',
            'creative_director' => 'Maria Grazia Chiuri' ,
            'headquarters' => 'Paris',
            'established_year' => '1946',
            'website' => 'https://www.dior.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Celine',
            'creative_director' => 'Hedi Slimane' ,
            'headquarters' => 'Paris',
            'established_year' => '1945',
            'website' => 'https://www.celine.com/es/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Rodarte',
            'creative_director' => 'Mulleavy Sisters' ,
            'headquarters' => 'Los Angeles',
            'established_year' => '2005',
            'website' => 'https://www.shoprodarte.com/',
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Self-Portrait',
            'creative_director' => 'Han Chong' ,
            'headquarters' => 'London',
            'established_year' => '2013',
            'website' => 'https://www.self-portrait.com/',
        ]);
    }
}
