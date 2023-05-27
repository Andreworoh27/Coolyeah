@extends('Template.navbar')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="/css/courseListStyle.css">

    <div class="container mb-3 mt-3">

    </div>
    <div class="container grid-container">

        <div class="row">
            @foreach ($Courses as $course)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ Storage::url('img/Courses/' . $course->course_image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->course_name }}</h5>
                            <p class="card-text">{{ $course->course_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </div>
@endsection
