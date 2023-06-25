@extends('layouts.app')

@section('title_block')
    Redagowanie zapisu
@endsection
@section('content')
    <h1>Redagój</h1>
   
    <form  action="{{route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Imię</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Enter name"id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{$data->email}}" placeholder="Enter email"id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Nazwa</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Enter topic"id="topic" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Wiadomości</label>
            <textarea type="text" name="message" 
             placeholder="Wiadomość"id="topic" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Redagować</button>
    </form>

    
@endsection