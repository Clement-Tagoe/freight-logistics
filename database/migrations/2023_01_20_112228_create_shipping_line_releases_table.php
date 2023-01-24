<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_line_releases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freight_id')->constrained();
            $table->string('voyage');
            $table->string('etd')->nullable();
            $table->string('eta')->nullable();
            $table->string('port_of_loading');
            $table->string('port_of_discharge');
            $table->string('total_volume')->nullable();
            $table->string('cargo_closing_time')->nullable();
            $table->string('commodity')->nullable();
            $table->string('ecdl')->nullable();
            $table->string('hauler')->nullable();
            $table->longText('carrier_remarks')->nullable();
            $table->longText('comments')->nullable();
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
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
        Schema::dropIfExists('shipping_line_releases');
    }
};
