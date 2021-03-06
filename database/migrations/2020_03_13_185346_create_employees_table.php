<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('car_reg_number');
            $table-> foreign('car_reg_number')
                  -> references('reg_number')->on('cars');
            $table->bigInteger('driver_license_id')->unsigned()->index();
            $table-> foreign('driver_license_id')
                  -> references('id')->on('driving_licenses');
            $table->string('phone_number', 13);
            $table->bigInteger('user_id')->unsigned()->index();
            $table-> foreign('user_id')
                  -> references('id')->on('users');
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
        Schema::dropIfExists('employees');
    }
}
