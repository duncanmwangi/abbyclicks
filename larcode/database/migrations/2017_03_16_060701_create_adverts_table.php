<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->integer('section_id');
            $table->string('name',30);
            $table->text('banner_path');
            $table->text('redirect_url');
            $table->decimal('spend_limit',9,2);
            $table->enum('state',['DRAFT','PUBLISHED'])->default('DRAFT');
            $table->enum('status',['REVIEW','APPROVED','DECLINED','RUNNING','PAUSED'])->default('REVIEW');
            $table->enum('billing',['PER-CLICK','PER-1000-IMPRESSIONS'])->default('PER-1000-IMPRESSIONS');
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
        Schema::dropIfExists('adverts');
    }
}
