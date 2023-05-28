@extends('Course.CourseDetail')

@section('course-session')
    @php
        $sessionDetail = $CourseInfo[3];
    @endphp
    <div>{{$sessionDetail->session_description}}</div>
@endsection
