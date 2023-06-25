@extends('layouts.app')

@section('title_block')
    Wiadomości
@endsection
@section('content')
    <h1>Wszystkie Wiadomości</h1>
     @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->subject }}</h3>
            <p>{{$elem->email}}</p>
            <p>{{$elem->sum}}</p>
            <p><small>{{$elem->created_at}}</small></p>

            <a href="{{route('contact-data-one', $elem->id) }}"><button class="btn btn-warning">Szczególowo</button></a>
        </div>
     @endforeach
@endsection

