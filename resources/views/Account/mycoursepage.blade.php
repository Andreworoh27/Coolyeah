@extends('Template.navbar')

@section('title', 'My Course')

@section('content')
    @if ($usercourses == null)
        <div>you have not subscribe to any course</div>
    @else
        @foreach ($usercourses as $usercourse)
            <div>{{ $usercourse->course->course_name }}</div>
        @endforeach
    @endif
@endsection
