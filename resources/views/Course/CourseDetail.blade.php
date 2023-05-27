@extends('Template.navbar')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="/css/courseDetailStyle.css">
    {{-- {{dd($CourseInfo)}} --}}
    @php
        $course = $CourseInfo[0];
        $subscribe = $CourseInfo[1];
    @endphp

    <div class="outside-course-detail">
    <div class="coursedetail">
    <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" alt="Course-image">
    </div>
    <div>{{ $course->course_name }}</div>
    <div>{{ $course->course_description }}</div>
    {{-- <div>{{ $course->course_rating }}</div> --}}
    <div class="subscribe">
    {{-- <div>{{ $course->course_subscriber }}</div> --}}
    @if ($subscribe == false)
        <a href="{{ url('course/subscribe/' . $course->id) }}"><input type="submit" value="Subscribe course"></a>
    @else
        <form action="{{ url('usercourse/' . $course->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Unsubscribe Course">
        </form>
    </div>
    @endif
</div>
@endsection
