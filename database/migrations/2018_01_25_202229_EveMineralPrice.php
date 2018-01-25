<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EveMineralPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EveMineralPrice', function (Blueprint $table) {

        $table->string('Mineral', 50);
            //$table->primary('Mineral');
            $table->integer('ItemUid')->primary();
            $table->float('ItemPrice');
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
      Schema::dropIfExists('EveMineralPrice');
    }
}
