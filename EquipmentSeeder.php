<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */            
    public function run()
    {
        $faker = Faker::create();
            for($i=0;$i<150;$i++)
        {
            DB::table('equipment')->insert([
                'jenis sport' => $faker->sentence(3), 
                'nama' => $faker->word(),
                'brand' => $faker->word(),
                'deskripsi' => $faker->word(),
                'poster' => $faker->url()
            ]);
        }
    }
}
