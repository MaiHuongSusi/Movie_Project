<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('per_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_detail');
            $table->Integer('id_per');
            $table->string('action_name');
            $table->string('action_code');
            $table->Integer('check_action');
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
        Schema::dropIfExists('per_details');
    }
}
