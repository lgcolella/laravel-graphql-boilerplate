<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('orderNumber');
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->date('shippedDate')->nullable();
            $table->string('status', 15);
            $table->text('comments')->nullable();
            $table->integer('customerNumber');

            $table->index('customerNumber');

            $table->foreign('customerNumber')->references('customerNumber')->on('customers');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
