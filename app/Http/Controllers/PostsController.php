<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        if (Auth::check()){
            $id_user = Auth::user()->id;

            $somaReceita = Posts::where('id_user', $id_user)->sum('moneyPlus');
            $somaDespesa = Posts::where('id_user', $id_user)->sum('moneyLess');

            $posts = Posts::where('id_user', $id_user)->paginate(1);

            return view('posts.index', compact('posts', 'somaReceita', 'somaDespesa'));

        }
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        $post = Posts::create([
            'title' => $request->title,
            'coment' => $request->coment,
            'moneyPlus' => $request->moneyPlus,
            'moneyLess' => $request->moneyLess,
            'id_user' => $user->id
        ]);
        if ($post) {

            return redirect()->route('posts.index')->with('sucesso', 'Post criado com sucesso');
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
