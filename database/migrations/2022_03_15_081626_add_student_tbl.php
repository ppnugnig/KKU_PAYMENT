<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('std_id');
            $table->string('std_fname');
            $table->string('std_lname');
            $table->string('std_email');
            $table->string('std_username');
            $table->string('std_password');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('course_id');
            $table->foreignId('dept_id');
            $table->foreignId('faculty_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
