@extends('Template.navbar')

@section('title', 'Profile Page')

@section('content')
    <div>{{auth()->user()->name}}</div>
@endsection
