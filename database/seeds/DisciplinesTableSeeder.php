<?php

use App\Discipline;
use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discipline::create(['name' => 'Downhill']);
        Discipline::create(['name' => 'Cross country']);
        Discipline::create(['name' => 'Enduro']);
        Discipline::create(['name' => 'Trail']);
        Discipline::create(['name' => 'Dirt jump']);
        Discipline::create(['name' => 'All mountain']);
    }
}
