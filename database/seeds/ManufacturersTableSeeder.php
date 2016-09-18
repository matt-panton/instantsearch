<?php

use App\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create(['name' => 'Banshee']);
        Manufacturer::create(['name' => 'Cannondale']);
        Manufacturer::create(['name' => 'Canyon']);
        Manufacturer::create(['name' => 'Cube']);
        Manufacturer::create(['name' => 'Diamondback']);
        Manufacturer::create(['name' => 'DMR']);
        Manufacturer::create(['name' => 'Giant']);
        Manufacturer::create(['name' => 'GT']);
        Manufacturer::create(['name' => 'Kona']);
        Manufacturer::create(['name' => 'Norco']);
        Manufacturer::create(['name' => 'Nuke Proof']);
        Manufacturer::create(['name' => 'Orange']);
        Manufacturer::create(['name' => 'Rocky Mountain']);
        Manufacturer::create(['name' => 'Santa Cruz']);
        Manufacturer::create(['name' => 'Scott']);
        Manufacturer::create(['name' => 'Specialized']);
        Manufacturer::create(['name' => 'Trek']);
        Manufacturer::create(['name' => 'Whyte']);
        Manufacturer::create(['name' => 'Yeti']);
    }
}
