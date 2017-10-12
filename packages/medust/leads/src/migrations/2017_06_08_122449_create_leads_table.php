<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('requirement');
            $table->string('require_details')->nullable();
            $table->string('note')->nullable();
            $table->string('lead_source')->default('none');
            $table->string('status')->default('new');
            $table->enum('confirm', ['yes', 'no'])->default('no');
            $table->integer('job_assign')->unsigned();
            $table->integer('refered_by')->unsigned();
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
        Schema::dropIfExists('leads');
    }
}
