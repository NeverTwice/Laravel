@extends('layout')
@section('title')
    The Wall
@endsection

@section('content')
    <div class="title m-b-md">
        The Wall
    </div>


    <div>
        @if($search === false)
            All posts :
        @else
            All posts containing "{{ $search }}" :
        @endif
    </div>

    <div class="links">
        <a href="/">Back to homepage</a>
    </div>
@endsection
