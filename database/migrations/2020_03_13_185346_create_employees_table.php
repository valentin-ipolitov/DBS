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
            $table-> foreign('auto_reg_number')
                  -> reference('ref_number')->on('autos')
                  -> onDelete('cascade');
            $table-> foreign('driver_license_id')
                  -> reference('id')->on('driving_licenses')
                  -> onDelete('cascade');
            $table->string('phone_number');
            $table-> foreign('user_id')
                  -> reference('id')->on('users');
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
