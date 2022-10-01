@extends('layout')
@section('title','Update tag Page')



@section('content')
    <form action="/tag/update" method="POST">
        <input type="hidden" value="{{ $tag->id }}" name="id">
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $tag->title }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}">
        </div>

        <button type="submit" class="btn btn-primary">Обновляем Тег</button>
    </form>
@endsection