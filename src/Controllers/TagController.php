<?php

namespace Hillel\Controllers;

use Hillel\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class TagController
{
    public function index()
    {
        $tags = Tag::all();
        return view('tag/index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tag/show', compact('tag'));
    }

    public function create()
    {
        $tag = new Tag();
        return view('tag/create', compact('tag'));
    }

    public function store()
    {
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required',
                'min:2',
                'max:30',
                'unique:tags,title'],
            'slug' => ['required', 'min:2', 'max:30']
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag = new Tag();
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();



        $_SESSION['success'] = 'Запис успішно додано!';
        return new  RedirectResponse('/tag');

    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tag/update', compact('tag'));
    }

    public function update()
    {

        $data = request()->all();

        $tag = Tag::find($data['id']);
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => ['required',
                'min:2',
                'max:30',
                Rule::unique('tags', 'title')->ignore($tag->id)],
                'slug' => ['required', 'min:2', 'max:30']
            ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag->save();


        $_SESSION['success'] =  'Запис успішно змінено!!';
        return new  RedirectResponse('/tag');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new  RedirectResponse('/tag');
    }
}