@extends('templates.main')
@section('title', 'Atividades')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_3.css')}}">
@endpush
@section('content')
<div class="links">
    @if ($ats->previousPageUrl() != null)
    <a href="{{$ats->previousPageUrl()}}" class="fas fa-angle-left font"></a>
    @endif
    @if ($ats->nextPageUrl() != null)
    <a href="{{$ats->nextPageUrl()}}" class="fas fa-angle-right font"></a>
    @endif
</div>
    <div class="div-background">
        @forelse ($ats as $ats)
        <form class="div-form" method='POST' action='{{Route('update.update', $ats->pk_lista)}}'>
            @csrf
            @method('put')
            <legend class="font">{{$ats->materia}}</legend>
            <div class='text'>
                <div class="div-span">
                    <span class="font">Atividade</span>
                    <span class="font">Entregar</span>
                </div>
                <div class="div-result">
                    <a class="font" target='_blank' rel='external' href='{{$ats->url}}'>Visualizar</a>
                    <time class="font">{{$ats->data_entrega}}</time>
                </div>
            </div>
            <button type='submit'>Concluído!</button>
        </form>
        @empty
        <span class="empty font">Parece que você fez tudo!</span>
        @endforelse
    </div>
    @if ($ats!= '')
    <div class="orderBy">
        <form action="{{route('filtrar.filtrar_atribuido')}}" method="GET">
            <legend class="font">Filtrar por:</legend>
            <div>
                <select require name="disc">
                    <option value="todas">Disciplinas</option>
                    @foreach ($discs as $disc)
                    <option value="{{$disc->fk_disciplina}}">{{$disc->materia}}</option>
                    @endforeach
                </select>
                @csrf
                <button type="submit">Filtrar</button>
            </div>
        </form>
    </div>
    @endif
@endsection
