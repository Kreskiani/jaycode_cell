<?php

use Illuminate\Database\Seeder;

class transaksi_table_seeder extends Seeder
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
            DB::table('transaksi')->insert([ //,
                'ADMI_Username'		=> $faker->name,
                'CUST_Id'			=> '1',
                'PROV_Id' 			=> '1',
                'TRANS_HargaJual' 	=> '6500',
                'TRANS_Dibayar' 	=> '6500',
                'TRANS_Hutang' 		=> '0',
                'TRANS_Tanggal' 	=> $faker->date,
            ]);
        }
    }
}
