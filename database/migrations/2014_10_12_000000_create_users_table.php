<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('email_varified')->default('false');
            $table->string('mobile')->unique();
            $table->boolean('mobile_varified')->default('false');
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->boolean('address_varified')->default('false');
            $table->string('location')->nullable();
            $table->string('pincode')->nullable();
            $table->string('image')->nullable();
            $table->string('about')->nullable();
            $table->string('role')->default('user');
            $table->string('status')->default('active');
            $table->ipAddress('visitor')->nullable();
            $table->dateTimeTz('last_logout')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
