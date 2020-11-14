<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverReequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_reequests', function (Blueprint $table) {
            $table->id();
            $table->string('driver');
            $table->string('farmer');
            $table->string('car')->nullable();
            $table->string('note')->nullable();
            $table->string('pickup');
            $table->string('group');
            $table->string('price');
            $table->string('status')->default('New');
            $table->string('Destination')->nullable();
            
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
        Schema::dropIfExists('driver_reequests');
    }
}
