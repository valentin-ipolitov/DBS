<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id')->unsigned()->index();
            $table->foreign('employee_id')
                  ->references('id')->on('employees');
            $table->longText('race_point');
            $table->float('distance', 8, 2);
            $table->point('src');	
            $table->point('dist');
            $table->dateTime('from');	
            $table->dateTime('untill');
            $table->bigInteger('facture_id')->unsigned()->index();
            $table->foreign('facture_id')
                  ->references('id')->on('factures');
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
        Schema::dropIfExists('races');
    }
}
