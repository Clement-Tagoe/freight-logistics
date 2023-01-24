<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingLineRelease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShippingLineReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingLineRelease::create([
            'freight_id' => 1,
            'voyage' => 'Cosco Shipping Taurus',
            'port_of_loading' => 'Singapore',
            'port_of_discharge' => 'Tema',
        ]);

        ShippingLineRelease::create([
            'freight_id' => 2,
            'voyage' => 'Gold Line Shipping',
            'port_of_loading' => 'Egypt',
            'port_of_discharge' => 'Tema',
        ]);

        ShippingLineRelease::create([
            'freight_id' => 3,
            'voyage' => 'Maersk Shipping',
            'port_of_loading' => 'United Kingdom',
            'port_of_discharge' => 'Takoradi',
        ]);

        ShippingLineRelease::create([
            'freight_id' => 4,
            'voyage' => 'Nagaski Shipping Company',
            'port_of_loading' => 'Belgium',
            'port_of_discharge' => 'Tema',
        ]);
    }
}
