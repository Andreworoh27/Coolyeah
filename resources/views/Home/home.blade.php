@extends('Template.navbar')

@section('title', 'Home')

@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        @foreach ($courses as $course)
            <div class="carousel-inner">
                <a href="{{ url('course/' . $course->id) }}">
                    @if ($course == $courses[0])
                        <div class="carousel-item active">
                            <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" class="d-block w-100"
                                alt="Course-image">
                            <div>{{ $course->id }}</div>
                            <div>{{ $course->course_name }}</div>
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" class="d-block w-100"
                                alt="Course-image">
                            <div>{{ $course->id }}</div>
                            <div>{{ $course->course_name }}</div>
                        </div>
                    @endif
                </a>
            </div>
        @endforeach
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
