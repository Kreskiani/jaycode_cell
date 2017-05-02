<?php

use Illuminate\Database\Seeder;

class admin_table_seeder extends Seeder
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
            DB::table('admin')->insert([ //,
                'ADMI_Username' => $faker->name,
                'ADMI_Password'	=> md5('kresnaajihidayat'),
                'ADMI_Email' 	=> $faker->email,
                'ADMI_Name' 	=> $faker->name,
                'ADMI_Hp' 		=> '089632534965',
                'ADMI_Address' 	=> $faker->address,
            ]);
        }    
    }
}
