<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('advert_id');
            $table->integer('placement_id');
            $table->integer('location_id');
            $table->integer('device_id');
            $table->integer('browser_id');
            $table->integer('income_id');
            $table->integer('expense_id');
            $table->ipAddress('ip_address');
            $table->uuid('uuid');
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
        Schema::dropIfExists('impressions');
    }
}
