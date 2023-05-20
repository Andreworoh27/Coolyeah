@extends('Template.navbar')

@section('title', 'Home')

@section('content')
    {{-- {{dd($CourseInfo)}} --}}
    @php
        $course = $CourseInfo[0];
        $subscribe = $CourseInfo[1];
    @endphp
    <div>Course Detail page: </div>
    {{-- <img src="{{ Storage::url('Course Image/' . $course->course_image) }}"> --}}
    <div>{{ $course->id }}</div>
    <div>{{ $course->course_name }}</div>
    <div>{{ $course->course_description }}</div>
    <div>{{ $course->course_rating }}</div>
    <div>{{ $course->course_subscriber }}</div>
    @if ($subscribe == false)
        <a href="{{ url('course/subscribe/' . $course->id) }}">Subscribe Course</a>
    @else
        <form action="{{ url('usercourse/' . $course->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Unsubscribe Course">
        </form>
    @endif
@endsection
