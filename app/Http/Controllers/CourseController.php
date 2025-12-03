<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Courses();
        $course->title = $request->title;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->category_id = $request->category_id;
        $course->sub_category_id = $request->sub_category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img_name = time() . rand(100000, 1000000) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('images', $img_name, 'public');
            $course->image = 'storage/images/' . $img_name;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
