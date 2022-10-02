@extends('layout')
@section('title','Update tag Page')



@section('content')
    <form action="/tag/update" method="POST">
        <input type="hidden" value="{{ $tag->id }}" name="id">
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $tag->title }}">

            @isset($_SESSION['errors']['title'])

                @foreach($_SESSION['errors']['title'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}">
            @isset($_SESSION['errors']['slug'])
                @foreach($_SESSION['errors']['slug'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset
        </div>

        <button type="submit" class="btn btn-primary">Обновляем Тег</button>
    </form>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection