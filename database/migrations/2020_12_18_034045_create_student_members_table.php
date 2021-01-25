<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chapter');
            $table->string('email');
            $table->string('interest_group');
            $table->string('firstname');
            $table->string('surname');
            $table->string('number');
            $table->string('password');
            $table->string('school_name');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('notes');
            $table->string('school_id');
            $table->string('national_id');          
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
        Schema::dropIfExists('student_members');
    }
}
