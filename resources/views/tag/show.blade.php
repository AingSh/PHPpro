@extends('layout')



@section('content')
    <h1>{{$tag->title}}</h1>
    <ul>
        <li>
            Slug {{$tag->slug}}
            Updated {{$tag->updated_at}}
        </li>
    </ul>
@endsection