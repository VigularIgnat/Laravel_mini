@extends('layouts.app')

@section('title_block')
    Повідомлення
@endsection
@section('content')
    <h1>Всі повідомлення</h1>
    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->sum }}</h3>
            <h3>{{ $elem->email }}</h3>
            <p>{{$elem->message}}</p>
            <a href="#"><button class="btn btn-warning">Детальніше</button></a>
        </div>
     @endforeach
     
@endsection

