<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_role_admin', function (Blueprint $table) {
            $table->bigIncrements('id_role_admin');
            $table->unsignedBigInteger('id_roles');
            $table->unsignedBigInteger('id_users');
            $table->timestamps();

            $table
            ->foreign('id_roles')
            ->references('id_roles')
            ->on('roles');
            $table
            ->foreign('id_users')
            ->references('id_users')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_role_admin');
    }
}
