<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;

class NewsController extends Controller
{
    /*O teste consiste em: Implementar a página de notícias, trazendo a notícia mais recente com título,
    subtítulo, texto, imagem, data e autor e abaixo a listagem das demais notícias em formato de
    paginação. Seguir boas práticas de desenvolvimento Laravel (uso de migrations, Eloquent,
    controllers, rotas, validações, etc). Documentar brevemente no README o que foi feito e como
    testar. Os dados devem vir de um banco de dados MySQL.
    */

    public function index(Request $request, $id = null)
    {
        if($id) $noticiaAberta = News::findOrFail($id);
        else $noticiaAberta = News::latest()->first();

        //outras noticias excluindo a ultima
        $outrasNoticias = News::latest()
            ->when($noticiaAberta, function($query) use ($noticiaAberta) {
                return $query->where('id', '!=', $noticiaAberta->id);
            })
            ->paginate(3)->withQueryString(); //limita quant por pag e mantem parametros na url
        
        //envia
        return view('site.noticia-aberta', compact('noticiaAberta', 'outrasNoticias'));
    }
    
    public function store(StoreNewsRequest $request)
    {
        News::create($request->validated());
        
        return redirect()->route('news.index')->with('success', 'Noticia criada com sucesso!');
    }
}
