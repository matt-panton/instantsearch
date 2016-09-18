<?php

use App\Bike;
use App\Discipline;
use Illuminate\Database\Seeder;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$disciplinesIds = Discipline::pluck('id');

        factory(Bike::class, 150)->create()->each(function ($bike) use ($disciplinesIds) {
        	$shuffled = $disciplinesIds->shuffle();
        	$bike->disciplines()->sync([$shuffled[0], $shuffled[1]]);
        });
    }
}
