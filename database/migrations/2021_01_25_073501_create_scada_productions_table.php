<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScadaProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scada_productions', function (Blueprint $table) {
            $table->id();
            $table->integer('asset_id');
            $table->string('subAsset');
            $table->string('primary_ip');
            $table->enum('primary_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('secondary_ip');
            $table->enum('secondary_status', ['OK','NOK','NW','OFF','NA']);
            $table->enum('replication_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('remarks1');
            $table->string('BWA_IP');
            $table->enum('BWA_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('VAST_IP');
            $table->enum('VAST_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('LL_IP');
            $table->enum('LL_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('switch_IP');
            $table->enum('switch_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('others_IP');
            $table->enum('others_status', ['OK','NOK','NW','OFF','NA']);
            $table->string('remarks2');
            $table->integer('updated_by');
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
        Schema::dropIfExists('scada_productions');
    }
}
