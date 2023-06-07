@extends('Course.CourseDetail')

@section('course-session')
<link rel="stylesheet" href="/css/courseSessionStyle.css">
    @php
        $sessionDetail = $CourseInfo[3];
        $outlines = explode('#', $sessionDetail->session_topics);
    @endphp
    <div class="session-container-kanan">
        <div class="session-title">{{ $sessionDetail->session_title }}</div>
        <ul>
            @foreach ($outlines as $outline)
                <li class="session-outline">{{ $outline }}</li>
            @endforeach
        </ul>
    </div>
    <div class="session-container-kiri">
        <div>Session Sources : </div>
        <ul>
            <li>
                <a href="{{ $sessionDetail->session_material_link }}" target="_blank">
                    Session Slides Material
                </a>
            </li>
            <li>
                <a href="{{ $sessionDetail->session_Vidio_link }}" target="_blank">
                    Session Vidio Link
                </a>
            </li>
            <li>
                <a href="{{ $sessionDetail->session_book_link }}" target="_blank">
                    Session Book Link
                </a>
            </li>
        </ul>
    </div>
@endsection
