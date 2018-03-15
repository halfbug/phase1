<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');     $table->string('father_name');
            $table->string('gender');
            $table->string('qualification')->nullable();
            $table->integer('join_date')->nullable();
            $table->integer('salary')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('assigned_class')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
