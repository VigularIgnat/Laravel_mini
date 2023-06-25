@extends('layouts.app')

@section('title_block')
    {{$data->subject}}
@endsection
@section('content')
    <h1>{{$data->subject}}</h1>
    
        <div class="alert alert-info">
            <p>{{$data->email}}- {{$data->name}}</p>
            <p>{{$data->message}}</p>
            <p><small>{{$data->created_at}}</small></p>

            <a href="{{route('contact-update', $data->id) }}"><button class="btn btn-primary">Szczególowo</button></a>
            <a href="{{route('contact-delete', $data->id) }}"><button class="btn btn-danger">Usuń</button></a>
        </div>
     
@endsection

