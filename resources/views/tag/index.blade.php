@extends('layout')
@section('title','Tag home Page')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Управление</th>

        </tr>
        </thead>
        <tbody>
        @forelse($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->title}}</td>
                <td>{{$tag->slug}}</td>
                <td>
                    <a href="/tag/{{$tag->id}}/edit" class="btn btn-primary">Обновить</a>
                    <a href="/tag/{{$tag->id}}/delete" class="btn btn-danger">Удалить</a>
                    <a href="/tag/{{$tag->id}}/show" class="btn btn-info">Показать</a>
                </td>
            </tr>
        @empty
            <p>Ничего нет</p>
        @endforelse
        </tbody>
    </table>
    <a href="/tag/create" class="btn btn-success">Добавить тег</a>
@endsection




