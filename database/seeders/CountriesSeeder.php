<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saudiArabia = Country::updateOrCreate([
            'name' => 'Saudi Arabia'
        ]);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Al-Bahah']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Al-Jawf']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Al-Qaseem']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Aseer']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Eastern Region']);
        $saudiArabia->regions()->updateOrCreate(['name' => "Ha'il"]);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Mecca']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Medina']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Najran']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Northern Borders']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Riyadh']);
        $saudiArabia->regions()->updateOrCreate(['name' => 'Tabouk']);
        $region = $saudiArabia->regions()->updateOrCreate(['name' => 'Makkah al-Mukarramah']);

        $saudiArabia->cities()->updateOrCreate([
            'name' => 'Mecca',
            'region_id'=> 1
        ]);
        $saudiArabia->cities()->updateOrCreate([
            'name' => 'Riyadh',
            'region_id'=> 1
        ]);
        $saudiArabia->cities()->updateOrCreate([
            'name' => 'Tabūk',
            'region_id'=> 1
        ]);
        $saudiArabia->cities()->updateOrCreate([
            'name' => 'Yanbuʿ',
            'region_id'=> 1
        ]);
    }
}
