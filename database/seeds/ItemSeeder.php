<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 10000) as $index)
        {
	        DB::table('items')->insert([
	            'inventory_number'  => $faker->numberBetween(5, 1500),
                'name'              => $faker->name,
                'serial_number'     => $faker->swiftBicNumber, // :)
                'description'       => $faker->paragraph(3, true),
                'price'             => $faker->randomFloat(8, 1500, 125000),
                'status'            => $faker->randomElement(['ACV', 'DEL', 'DRF']),
                'modified_by'       => $faker->randomElement([1,2,3]),
                'modified_at'       => $faker->dateTime(),
	        ]);
	}
    }
}
