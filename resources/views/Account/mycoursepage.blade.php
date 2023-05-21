@extends('Template.navbar')

@section('title', 'My Course')

@section('content')
<link rel="stylesheet" href="/css/myCourseStyle.css">
<div class="outside-my-course">
    @if ($usercourses -> isEmpty())
        <div><h1>you have not subscribe to any course</h1></div>
    @else
        @foreach ($usercourses as $usercourse)
        <div class="mycourse">
            <img src="{{ Storage::url('img/Courses/' . $usercourse->course->course_image) }}" alt="Course-image">
        </div>
            <div>{{ $usercourse->course->course_name }}</div>
        @endforeach
    @endif
</div>
@endsection
