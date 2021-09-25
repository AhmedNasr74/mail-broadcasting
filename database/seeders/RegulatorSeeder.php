<?php

namespace Database\Seeders;

use App\Models\Regulator;
use Illuminate\Database\Seeder;

class RegulatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regulator::create([
            'name' => 'GSA Manger',
            'phone' => '01150225286',
            'account_manger_name' => 'Masoud Abu El Soud',
            'password' => 'password',
        ]);
    }
}
