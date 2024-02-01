<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseStudentController extends Controller
{
    public function dataInsert(){
        $student = new Student();
        $student->name = 'arifeen';
        $student->save();

        $course = new Course();
        $course->title = "php";
        $course->description = "intro to php";
        $course->save();

        $student->courses()->attach($course);

    }

    public function view(){
        $student = Student::find(2);
        // $course = $student->courses->toArray();
        // print_r($course);
        $course = $student->courses;
        dump($course);

        $course = Course::find(2);
        $student = $course->students;
        dump($student); 

    }
}
