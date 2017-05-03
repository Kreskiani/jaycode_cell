<?php

use Illuminate\Database\Seeder;

class customer_table_seeder extends Seeder
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
            DB::table('customer')->insert([ //,
                'CUST_Name' 	=> $faker->name,
                'CUST_PhoneNumber'	=> '089632534965',
            ]);
        }
    }
}
