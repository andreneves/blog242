<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciarPostagem;
use App\Models\Postagem;

class ModeracaoController extends Controller
{
    public function ModeracaoDenunciaPostagem()
    {
        $denunciaPostagem = DenunciarPostagem::orderBy('id', 'DESC')->paginate(10);
        return view('moderacao.denunciaPostagem', compact('denunciaPostagem'));
    }

    public function ModeracaoDenunciaPostagemAceito($id){

        $denunciaPostagem = DenunciarPostagem::find($id);
        $denunciaPostagem->status = 'ACEITO';
        $denunciaPostagem->save();

        $postagem = Postagem::find($denunciaPostagem->postagem_id);
        $postagem->status = 0;
        $postagem->save();

        return redirect()->route('ModeracaoDenunciaPostagem')->with('mensagem', 'Denúncia aceita com sucesso!');

    }

    public function ModeracaoDenunciaPostagemNegado($id)
    {
        $denunciaPostagem = DenunciarPostagem::find($id);
        $denunciaPostagem->status = 'NEGADO';
        $denunciaPostagem->save();

        return redirect()->route('ModeracaoDenunciaPostagem')->with('mensagem', 'Denúncia negada com sucesso!');
    }
}
