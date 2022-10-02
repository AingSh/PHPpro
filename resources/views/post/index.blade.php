 @extends('layout')
@section('title','Category home Page')


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
            <th scope="col">body</th>
            <th scope="col">Название Категории</th>
            <th scope="col">Теги</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Управление</th>
        </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->category->title}}</td>
                <td>{{$post->tags->pluck('title','slug')->join(', ')}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Обновить</a>
                    <a href="/post/{{$post->id}}/delete" class="btn btn-danger">Удалить</a>
                    <a href="/post/{{$post->id}}/show" class="btn btn-info">Показать</a>
                </td>
            </tr>
        @empty
            <p>Ничего нет</p>
        @endforelse
        </tbody>
    </table>
    <a href="/post/create" class="btn btn-success">Создать новый пост</a>
@endsection




