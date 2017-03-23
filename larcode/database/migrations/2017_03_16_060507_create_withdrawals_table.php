<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publisher_id');
            $table->decimal('amount',9,2);
            $table->enum('status',['REQUEST','PAID','DECLINED']);
            $table->string('transaction_id',100);
            $table->dateTime('date_requested');
            $table->dateTime('date_paid')->nullable();
            $table->dateTime('date_declined')->nullable();
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
        Schema::dropIfExists('withdrawals');
    }
}
