<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNitsEditorUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name')->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('contact_number')->nullable()->after('email_verified_at');
            $table->bigInteger('role_id')->unsigned()->after('password');
            $table->softDeletes();

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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
            $table->dropColumn('role_id');
        });
        
        Schema::dropIfExists('roles');
    }
}
