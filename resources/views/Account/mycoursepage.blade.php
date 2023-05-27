@extends('Template.navbar')

@section('title', 'My Course')

@section('content')
<link rel="stylesheet" href="/css/myCourseStyle.css">

<header>MY COURSES</header>
<div class="outside-my-course">
    @if ($usercourses -> isEmpty())
        <div><h1>you have not subscribe to any course</h1></div>
    @else     
        <div class ="container mt-4">
            <div class="row row-cols-3">
            @foreach ($usercourses as $usercourse)
                <div class="col mb-4">
                <a href="{{ url('course/' . $usercourse->course_id) }}">
                    <div class="card">
                        <img src="{{ Storage::url('img/Courses/' . $usercourse->course->course_image) }}" class="card-img-top" alt="Course-image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $usercourse->course->course_name }}</h5>
                            <p class="card-text">{{ $usercourse->course->course_description }}</p>
                        </div>
                    </div>
                </a>    
                </div>
                @endforeach
            </div>
        </div>
        <!-- <div class="mycourse">
            <img src="{{ Storage::url('img/Courses/' . $usercourse->course->course_image) }}" alt="Course-image">
        </div>
            <div>{{ $usercourse->course->course_name }}</div> -->
    @endif
</div>
@endsection
