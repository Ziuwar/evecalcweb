<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EveItemData', function (Blueprint $table) {
            $table->integer('ItemUid')->primary();
            //$table->primary('ItemUid');
	    $table->char('ItemName', 100);
	    $table->float('IskPrice', 16, 2);
	    $table->integer('LpPoints')->nullable();
	    $table->float('MaterialPrice', 16, 2)->nullable();
	    $table->float('ItemTotalPrice', 16, 2)->nullable();
	    $table->float('SellPriceJita', 16, 2)->nullable();
	    $table->float('SellTaxes', 16, 2)->nullable();
	    $table->float('Profit', 16, 2)->nullable();
	    $table->float('ProfitPercent', 16, 2)->nullable();
	    $table->float('Efficiency', 16, 2)->nullable();
	    $table->integer('Tritanium')->nullable();
	    $table->integer('Pyerite')->nullable();
	    $table->integer('Mexallon')->nullable();
	    $table->integer('Isogen')->nullable();
	    $table->integer('Nocxium')->nullable();
	    $table->integer('Zydrine')->nullable();
	    $table->integer('Megacyte')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EveItemData');
    }
}
