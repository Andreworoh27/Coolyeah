<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSession;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Home.home')->with('courses', Course::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Course.addCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'CourseName' => 'required',
            'CourseDescription' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg',
            'CourseSession' => 'numeric|min:1',
        ]);

        $courseName = $request->CourseName;
        $courseDescription = $request->CourseDescription;
        $courseImage = $request->file('photo');
        $courseSession = $request->CourseSession;

        Storage::putFileAs('/public/img/Courses/', $courseImage, $courseImage->getClientOriginalName());

        DB::table('courses')->insert([
            'course_name' => $courseName,
            'course_image' => $courseImage->getClientOriginalName(),
            'course_session' => $courseSession,
            'course_description' => $courseDescription,
            'created_at' => now()
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $subscribeCheck = UserCourse::where('course_id', $id)->where('user_id', Auth::user()->id)->first();
        // dd($subscribeCheck);
        if ($subscribeCheck) {
            $subscribeCheck = true;
        } else {
            $subscribeCheck = false;
        }
        $courseSession = CourseSession::where('course_id', $id)->get();
        $courseInfo = [Course::find($id), $subscribeCheck, $courseSession];
        return view('Course.CourseDetail')->with('CourseInfo', $courseInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
