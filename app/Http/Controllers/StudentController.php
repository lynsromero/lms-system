<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.login');
    }
    public function create(){
        $categories = Categories::all();
        // $teachers = Teacher::all();
        return view('student.register', compact('categories', ));
    }

    public function store(Request $request){

        Student::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'dob'=>$request->dob,
            'password'=>bcrypt($request->password),
            'category_id'=>$request->category_id,
            'sub_category_id'=>$request->sub_category_id,
            'teacher_id'=>$request->teacher_id,
            'payment_sys'=>$request->payment_sys,
        ]);

        return redirect()->back()->with('success', 'Student Registered Successfully!');
    }

    public function getSubCategories($category_id){
        $subcategories = SubCategories::where('category_id', $category_id)->get();
        return response()->json($subcategories);
    }


    public function dashboard(){
        return redirect()->route('home');
    }
}

