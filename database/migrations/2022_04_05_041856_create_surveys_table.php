<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fever_chill')->nullable();
            $table->string('headache')->nullable();
            $table->string('cough')->nullable();
            $table->string('cold')->nullable();
            $table->string('sorethroat')->nullable();
            $table->string('rashess')->nullable();
            $table->string('fatigue')->nullable();
            $table->string('weakness')->nullable();
            $table->string('lost_of_smell_taste')->nullable();
            $table->string('diarhea')->nullable();
            $table->string('defficult_breathing')->nullable();
            $table->string('none')->nullable();
            $table->string('other_symptoms' , 50)->nullable();
            $table->dateTime('created_at');
            $table->string('purpose' ,30);
            $table->string('temperature' ,10);
            $table->string('vaccine_type' , 25);
            $table->unsignedInteger('person_id')->index();
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
};
