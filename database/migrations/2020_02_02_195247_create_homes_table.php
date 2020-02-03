<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->string('postal_code');
            $table->string('type');
            $table->unsignedInteger ('bathrooms');
            $table->unsignedInteger ('bedrooms');
            $table->unsignedInteger ('floor_space');
            $table->unsignedBigInteger('price');
            $table->string('agent_id');
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
        Schema::dropIfExists('homes');
    }
}
