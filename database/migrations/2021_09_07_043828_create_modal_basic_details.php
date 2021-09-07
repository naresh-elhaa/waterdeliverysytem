<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalBasicDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_modal_basic_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('modal_name');
            $table->integer('seating_capacity');
            $table->decimal('length',9,2)->default(0);
            $table->decimal('width',9,2)->default(0);
            $table->boolean('delivery_support')->default(true);
            $table->decimal('delivery_price',9,2)->default(0);
            $table->decimal('maximum_capacity',9,2)->default(0);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('vehicle_modal_basic_details');
    }
}
