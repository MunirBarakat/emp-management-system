<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamelyDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famely_data', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->date('DB');
            $table->longText('Notes');
            $table->bigInteger('relative_relation_ID')->unsigned();
            $table->bigInteger('employee_data_ID')->unsigned();
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
        Schema::dropIfExists('famely_data');
    }
}
