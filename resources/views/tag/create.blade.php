@extends('layout')
@section('title','Create home Page')


@section('content')
    <form action="/tag/store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$_SESSION['data']['title'] ?? ''}}">

            @isset($_SESSION['errors']['title'])

                @foreach($_SESSION['errors']['title'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset
        </div>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{$_SESSION['data']['slug'] ?? ''}}">
            @isset($_SESSION['errors']['slug'])
                @foreach($_SESSION['errors']['slug'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset
        </div>

{{--        <div class="mb-3">--}}
{{--            <label for="user_id" class="form-label">Post</label>--}}
{{--            <select name="user_id" id="user_id">--}}
{{--                <option value="1">Post 1</option>--}}
{{--                <option value="2">Post 2</option>--}}
{{--                <option value="3">Post 3</option>--}}
{{--            </select>--}}

{{--            @isset($_SESSION['errors']['user_id'])--}}
{{--                @foreach($_SESSION['errors']['user_id'] as $error)--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$error}}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endisset--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection