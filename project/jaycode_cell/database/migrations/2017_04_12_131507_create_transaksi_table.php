<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ADMI_Username');
            $table->integer('CUST_Id');
            $table->integer('PROV_Id');
            $table->integer('TRANS_HargaJual');
            $table->integer('TRANS_Dibayar');
            $table->integer('TRANS_Hutang');
            $table->date('TRANS_Tanggal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
