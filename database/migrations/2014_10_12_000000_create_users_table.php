<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('CPF_NO');
            $table->string('name');
            $table->string('DESIGNATION');
            $table->string('SECTION');
            //$table->integer('LOCATION_ID');
            $table->string('ASSET');
            $table->string('ROLE');
            $table->enum('AUTHORISED', ['Y', 'N']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('WEF_DATE');
            $table->integer('AUTHORISED_BY');
            $table->integer('DELETED_BY');
            $table->string('DELETE_STATUS');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
