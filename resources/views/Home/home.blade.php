@extends('Template.navbar')

@section('title', 'Home')

@section('content')
    {{-- {{ dd(Auth::user()->name) }} --}}
    @foreach ($courses as $course)
        <a href="{{ url('course/' . $course->id) }}">
            {{-- <img src="{{ Storage::url('Course Image/' . $course->course_image) }}"> --}}
            <div>course : {{ $course->id }}</div>
            <div>{{ $course->course_name }}</div>
            <div>{{ $course->course_description }}</div>
            <br>
            <br>
        </a>
    @endforeach
@endsection
