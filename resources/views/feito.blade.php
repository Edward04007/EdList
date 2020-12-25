@extends('templates.main')
@section('title', 'Atividades')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_2.css')}}">
@endpush
@section('content')
<div class="bg-img">
    <img src='{{session('UsuarioFoto')}}'alt='foto de perfil'>
    <figcaption>{{session('UsuarioNome')}}</figcaption>
</div>
<nav class="menu-op">
    <ul>
        <li><a rel='prev' href="{{Route('fazer.lista_atribuida')}}">Atribuído</a></li>
        <li><a>Concluído</a></li>
    </ul>
</nav>
<section class="conteudo">
    <div class="links">
        <a href="{{$ats->previousPageUrl()}}" class="fas fa-angle-left"></a>
        <a href="{{$ats->nextPageUrl()}}" class="fas fa-angle-right"></a>
    </div>
    @forelse ($ats as $ats)
    <article>
        <span>{{$ats->materia}}</span>
            <div class='text'>
                <div>
                    <p>Atividade</p>
                    <p>Entregar</p>
                    <p>Enviada</p>
                </div>
                <div>
                    <a target='_blank' rel='external' href='{{$ats->url}}'>Visualizar</a>
                    <p>{{$ats->data_entrega}}</p>
                    <p>{{$ats->data_entregue}}</p>
            </div>
        </div>
    </article>
    @empty
    <span class="empty">Oops.. Nadinha!</span>
    @endforelse
</section>
@endsection