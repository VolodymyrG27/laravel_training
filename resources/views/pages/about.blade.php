@extends('app')

@section('content')

<h1>About</h1>
@if (count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif
   

    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
@endsection

    
