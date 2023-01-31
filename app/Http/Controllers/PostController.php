<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post  = new Post(); // instnaciando o model
        //conteudo do model que precisamos preecher
        $post->title = "pericles";
        $post->content = "pericles e um cachorro teimoso";
        $post->author = "fernanda";
        $post->save(); // salvando no banco de dados
        dd($post);
    }
    public function read(Request $r)
    {
        $id = $r->query('id');
        $id = request('id');

        $post = new Post();
        $posts = $post->find($id);
        return $posts;
    }

    public function realAll()
    {
        $posts = Post::all();
        return $posts;
    }
    public function update(Request $r)
    {
        $id = $r->query('id');
        $id = request("id");

        $post = Post::find($id);
        $post->title = "Henrique Dantas";
        $post->save();
        return $post;
    }
    public function delete(Request $r)
    {
        $id = $r->query("id");
        $id = request("id");

        if ($id > 0) {
            $post = Post::find($id);
            $post->delete();
            return redirect("/post/read_all");
        } else {
            return "Não existem niguem cadastrado o sistema";
        }
    }
}
