@extends('layouts.app')

@section ('main_content')
<h1>home</h1>

<ul>
    @foreach ($movies as $movie)
        <li>
            <h2>
                {{$movie->title}} 
            </h2>
        </li>
    @endforeach
</ul>
@endsection