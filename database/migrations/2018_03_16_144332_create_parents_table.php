<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('student_id')->unsigned()->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('mother_name');
            $table->string('address')->nullable();
            $table->string('m_home_phone')->nullable();
            $table->string('m_work_phone')->nullable();
            $table->string('m_email')->nullable();
            $table->string('father_name');
            $table->string('father_job')->nullable();
            $table->string('f_home_phone')->nullable();
            $table->string('f_work_phone')->nullable();
            $table->string('f_email')->nullable();
            $table->string('best_time_contact')->nullable();
            $table->string('guard_name')->nullable();
            $table->string('guard_add')->nullable();
            $table->string('guard_phone')->nullable();
            $table->string('guard_email')->nullable();
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
        Schema::dropIfExists('parents');
    }
}
