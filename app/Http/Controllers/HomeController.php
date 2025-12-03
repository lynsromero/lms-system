<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $courses = Courses::orderBy('created_at', 'desc')->get();

        return view('index' , compact('courses'));
    }
}
