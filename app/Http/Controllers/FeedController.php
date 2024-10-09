<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;

class FeedController extends Controller
{

    public function welcome(){
        $postagens = Postagem::orderBy('id', 'DESC')->get();
        return view('welcome', compact('postagens'));
    }

    public function categoria(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('feed.categoria', compact('categorias'));
    }

    public function categoriaById($id){
        $postagens = Postagem::where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view('feed.categoriaById', compact('postagens'));
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('feed.autor', compact('autores'));
    }

    public function autorById($id){
        $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('feed.autorById', compact('postagens'));
    }

    public function comentario($id){
        $postagem = Postagem::find($id);
        return view('feed.comentario', compact('postagem'));
    }


}
