<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	for ($i=0; $i <5 ; $i++) { 
    		
    		\DB::table('facilities')->insert(array(
        		'name' => $faker->unique()->randomElement($array = array ('Edificio con ascensor','Piscina','Estacionamiento', 'Cocina', 'Aire Acondicionado', 'Calefaccion'))
        	));
    	}
    }
}
