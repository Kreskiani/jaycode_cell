<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->String('ADMI_Username', 100);
            $table->primary('ADMI_Username');
            $table->string('ADMI_Password');
            $table->string('ADMI_Email');
            $table->string('ADMI_Name');
            $table->string('ADMI_Hp');
            $table->string('ADMI_Address');
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
        Schema::dropIfExists('admin');
    }
}
