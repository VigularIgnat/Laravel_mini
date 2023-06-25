@extends('layouts.app')

@section('title_block')
    Contacts our firm
@endsection
@section('content')
    <h1>Strona kontaktów</h1>
   
    <form  action="{{route('contact-submit')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Imię</label>
            <input type="text" name="name" placeholder="Enter name"id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email"id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Nazwa</label>
            <input type="text" name="subject" placeholder="Enter topic"id="topic" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Wiadomośó</label>
            <input type="text" name="message" placeholder="Enter message"id="topic" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Zdjęcie</label>
            <input type="file" name="photos[]" id="" placeholder="Plik" multiple>
            
            <input type="hidden" name="max_file_size" value="65536">
        </div>
        <button type="submit" class="btn btn-success">Nadeslać</button>
    </form>

    
@endsection