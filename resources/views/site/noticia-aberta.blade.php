@extends('layouts.app')
@section('title') Zaite Padrão - Notícia @endsection
@section('content')

<section class="noticia-aberta">

  <div class="container-noticia">
    <div class="infos-noticia">
      <h1>{{$noticiaAberta->titulo}}</h1>
      <span>{{$noticiaAberta->getDataFormatada()}}, por {{$noticiaAberta->autor}}</span>
    </div>
    <div class="content-noticia">
      <h3 class="subtitulo">{{$noticiaAberta->subtitulo}}
      </h3>
        <img src="{{ asset('assets_site/images/imageNoticia' . $noticiaAberta->id . '.png') }}" 
            onerror="this.src='{{ asset('assets_site/images/banner.png') }}'" 
            alt="imagem notícia">
        <p>
        {{$noticiaAberta->texto}}<br><br>
        Fonte: Agência Câmara de Notícias
      </p>
      <a class="download" href="">Clique aqui para fazer o download</a>
    </div>
  </div>
    @if($outrasNoticias->count() > 0)
        <div class="mais-noticias">
            <div class="title-section">
            <h1>Mais Notícias</h1>
            </div>
            <div class="container-mais-noticias">
                @foreach($outrasNoticias as $noticia)
                    <div class="card-noticia">
                        <img src="{{ asset('assets_site/images/imageNoticia' . $noticia->id . '.png') }}" onerror="this.src='{{ asset('assets_site/images/banner.png') }}'" alt="imageNoticia{$noticia->id}.png">
                        <div class="info-noticia">
                        <h2>{{$noticia->titulo}}</h2>
                        <span>{{$noticia->getDataFormatada()}}, por {{$noticia->autor}}</span>
                        <p>{{Str::limit($noticia->texto, 150)}}</p>
                        <a href="{{ route('site.noticia-aberta', ['id' => $noticia->id]) }}">Ver notícia</a>
                        </div>
                    </div>
                @endforeach
            <div class="paginacao">
                {{ $outrasNoticias->onEachSide(2)->links('custom.pagination') }}
            </div>
        </div>
    @else
        <div class="no-news">
            <h3>Nenhuma notícia encontrada</h3>
        </div>
    @endif
</section>


@endsection

@section('js')

@endsection