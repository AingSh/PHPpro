@extends('layout')
@section('title','Update Page')


@section('content')
    <h1>{{$post->title}}</h1>
    <ul>
        <li>
            Slug {{$post->slug}}
        </li>
        <li>
            Body {{$post->body}}
        </li>
        <li>
            Category {{$post->category['title']}}
        </li>
        <li>
            Create {{$post->created_at}}
        </li>
        <li>
            Updated {{$post->updated_at}}
        </li>
    </ul>
@endsection

