@extends('Template.navbar')

@section('title', 'Home')

@section('content')
<div>Course Detail page: </div>
{{-- <img src="{{ Storage::url('Course Image/' . $course->course_image) }}"> --}}
<div>{{$course->id}}</div>
<div>{{$course->course_name}}</div>
<div>{{$course->course_description}}</div>
<div>{{$course->course_rating}}</div>
<div>{{$course->course_subscriber}}</div>
@endsection
