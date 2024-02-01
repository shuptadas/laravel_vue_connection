<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use App\Models\Stusent;
// use App\Models\Course;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Student::class);
            $table->foreignIdFor(\App\Models\Course::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
};
