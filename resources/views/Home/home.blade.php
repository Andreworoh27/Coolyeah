@extends('Template.navbar')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="/css/homeStyle.css">
    <div class="outside-carousel">
    <div id="carouselExampleAutoplaying" class="carousel-slide" data-bs-ride="carousel">
        @foreach ($courses as $course)
            <div class="carousel-inner">
                <a href="{{ url('course/' . $course->id) }}">
                    @if ($course == $courses[0])
                        <div class="carousel-item-active">
                            {{-- <div class="course-name">{{ $course->course_name }}</div> --}}
                            <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" class="d-block w-100"
                                alt="Course-image">
                            {{-- <div class="course-name">{{ $course->id }}</div> --}}
                        </div>
                    @else
                        <div class="carousel-item">
                            {{-- <div class="course-name">{{ $course->course_name }}</div> --}}
                            <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" class="d-block w-100"
                                alt="Course-image">
                            {{-- <div class="course-name">{{ $course->id }}</div> --}}
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
    </div>
    <div class="outside-course-list">
        <div class="container">
            @foreach ($courses as $course)
                <a href="{{ url('course/' . $course->id) }}">
                @if ($course == $courses[0])
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" class="d-block w-100"
                                alt="Course-image">
                                <div class="course-name">{{ $course->course_name }}</div>
                                <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bx bxl-facebook"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-twitter"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bx bxl-linkedin"></i></a>
                                </div>
                                <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Course detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="{{ Storage::url('img/Courses/' . $course->course_image) }}" class="d-block w-100"
                                alt="Course-image">
                                <div class="course-name">{{ $course->course_name }}</div>
                                <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bx bxl-facebook"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-twitter"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bx bxl-linkedin"></i></a>
                                </div>
                                <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Course detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </a>
            @endforeach
            </div>
    </div>
@endsection
