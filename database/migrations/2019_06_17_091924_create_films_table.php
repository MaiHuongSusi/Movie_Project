<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id_film');
            $table->string('vn_name');
            $table->string('en_name');
            $table->bigInteger('id_type_film');
            $table->bigInteger('id_author');
            $table->text('summary');
            $table->Integer('total_chapter');
            $table->Integer('current_chapter');
            $table->string('link_avt');
            $table->boolean('completed');
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
        Schema::dropIfExists('films');
    }
}
