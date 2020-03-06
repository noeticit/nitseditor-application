<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu_location')->nullable();
            $table->bigInteger('parent_id')->nullable()->unsigned();
            $table->string('name');
            $table->string('link')->nullable();
            $table->string('icon')->nullable();
            $table->integer('order');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('menus');
        });

        Schema::create('menus_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('menu_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('menu_id')->references('id')->on('menus');
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
        Schema::dropIfExists('menus_roles');
        Schema::dropIfExists('menus');
    }
}
