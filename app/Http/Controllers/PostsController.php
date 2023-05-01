<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
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
        return redirect()->back() ->with('falha', 'Erro ao criar post');

    }
}
