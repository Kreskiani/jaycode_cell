<?php

use Illuminate\Database\Seeder;

class provider_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('provider')->insert([ //,
                'PROV_Name'		=> $faker->name,
                'PROV_Nominal' 	=> '5k',
                'PROV_Harga' 	=> '5000',
            ]);
        }    }
}
