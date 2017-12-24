<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->char('customerName',255);
            $table->date('retailMiti');
            $table->integer('daysEcp');
            $table->char('model',225);
            $table->char('mobileNo',255);
            $table->char('salesExe',255);
            $table->char('salesPrice',255);
            $table->char('amountRecived',255);
            $table->char('principleDue',255);
            $table->char('interest',255);
            $table->char('totalDue',255);
            $table->char('remarks',255);
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
        Schema::dropIfExists('customers');
    }
}
