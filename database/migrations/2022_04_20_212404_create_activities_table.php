<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('responsibility_id');
            $table->foreign('responsibility_id')->references('id')->on('responsibilities');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('categories');
            $table->string('name');
            $table->text('description')->nullable();
            $table->dateTime('deadline', $precision = 0);
            $table->binary('homework')->nullable();
            $table->text('url')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
