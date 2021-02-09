<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('corporation')->nullable();
            $table->string('address')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('seller_contact_details')->nullable();
            $table->string('seller_attorney')->nullable();
            $table->string('seller_attorney_contact_details')->nullable();
            $table->string('buyer_contact_details')->nullable();
            $table->string('buyer_attorney')->nullable();
            $table->string('buyer_attorney_contact_details')->nullable();
            $table->string('co_broker_name')->nullable();
            $table->string('co_broker_contact_details')->nullable();
            $table->string('loho_represented')->nullable();
            $table->string('co_broker_represented')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('commission')->nullable();
            $table->string('closing_date')->nullable();
            $table->string('shares')->nullable();
            $table->string('carrying_charge')->nullable();
            $table->string('assessment_charge')->nullable();
            $table->string('financing')->nullable();
            $table->string('flip_tax')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
