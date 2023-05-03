<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post = $request->all();
        if ($post) {
           Posts::create($post);
            return redirect()->route('users.index')->with('sucesso', 'Post criado com sucesso');
        }
        return redirect()->back()->with('falha', 'Erro ao criar post');

    }
    public function edit($id)
    {
        $posts = Posts::find($id);
        return view('posts.edit', compact('posts'));
    }
    public function update(Request $request, $id)
    {
        $posts = Posts::find($id);
        if($posts){
            $posts->update($request->all());
        return redirect()->route('posts.index');
        }
    }
    public function delete($id)
    {
        $posts = Posts::find($id);
        if ($posts) {
            $posts->delete();
            return redirect()->route('posts.index');
        }
    }
}
