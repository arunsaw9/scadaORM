<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScadaDrillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scada_drillings', function (Blueprint $table) {
            $table->id();
            $table->integer('asset');
            $table->string('subAsset'); //RIG_ID
            //$table->string('RIG_ID');
            $table->string('DSA_IP');
            $table->enum('DSA_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('DSB_IP');
            $table->enum('DSB_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('WITSML_IP');
            $table->enum('WITSML_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('MDTOTCO_IP');
            $table->enum('MDTOTCO_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('REMARKS3')->nullable();
            $table->enum('REPLICATION_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('REMARKS1')->nullable();
            $table->string('BWA_IP');
            $table->enum('BWA_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('VSAT_IP');
            $table->enum('VSAT_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('GATEWAY_IP');
            $table->enum('GATEWAY_STATUS', ['OK','NOK','NW','OFF','NA']);
            $table->string('REMARKS2')->nullable();
            $table->integer('updated_by');
            //$table->integer('INST_UPDATED_BY'); // not need
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
        Schema::dropIfExists('scada_drillings');
    }
}
