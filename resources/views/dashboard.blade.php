@extends('layouts.main')
@section('title', 'Dasbord')

@section('content')
    
    <div class="col-md-10 offset-md-1 dashbord-title-container">
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events)>0)
                   
        @else
            <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a></p>
        @endif
    </div>


@endsection