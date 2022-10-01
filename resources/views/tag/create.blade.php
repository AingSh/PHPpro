@extends('layout')
@section('title','Create home Page')


@section('content')
    <form action="/tag/store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection