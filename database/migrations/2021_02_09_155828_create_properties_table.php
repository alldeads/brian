<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('current_owner')->nullable();
            $table->string('owner_since')->nullable();
            $table->string('coop')->nullable();
            $table->string('property_address')->nullable();
            $table->string('dropbox_docs')->nullable();
            $table->string('dropbox_images')->nullable();
            $table->string('previous_owners')->nullable();
            $table->string('market_share_notes')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
