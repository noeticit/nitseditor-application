<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('roles_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('page_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_pages');
        Schema::dropIfExists('pages');
    }
}
