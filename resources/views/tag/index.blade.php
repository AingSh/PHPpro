@extends('layout')
@section('title','Tag home Page')


@section('content')

    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{$_SESSION['success']}}
        </div>
    @endisset
    @php
        unset($_SESSION['success']);

    @endphp
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
                    <a href="/tag/{{$tag->id}}/delete" class="btn btn-danger">В корзину</a>
                    <a href="/tag/{{$tag->id}}/force-delete" class="btn btn-danger">Удалить на всегда</a>
                    <a href="/tag/{{$tag->id}}/show" class="btn btn-info">Показать</a>
                </td>
            </tr>
        @empty
            <p>Ничего нет</p>
        @endforelse
        </tbody>
    </table>
    <a href="/tag/create" class="btn btn-success">Добавить тег</a>
    <a href="/tag/trash" class="btn btn-info">Корзина</a>
@endsection




