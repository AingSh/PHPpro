@extends('layout')



@section('content')
    <h1>{{$tag->title}}</h1>
    <ul>
        <li>
            Slug {{$tag->slug}}
            Create {{$tag->created_at}}
            Updated {{$tag->updated_at}}
        </li>
    </ul>
@endsection