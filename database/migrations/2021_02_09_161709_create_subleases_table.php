<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subleases', function (Blueprint $table) {
            $table->id();
            $table->string('owner')->nullable();
            $table->string('sub_tenant')->nullable();
            $table->string('list_price')->nullable();
            $table->string('lease_amount')->nullable();
            $table->string('lease_start')->nullable();
            $table->string('lease_end')->nullable();
            $table->string('coop')->nullable();
            $table->string('property_address')->nullable();
            $table->string('unit_no')->nullable();
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
        Schema::dropIfExists('subleases');
    }
}
