@extends('layout.app')

@section('title-content', 'Edit comic')

@section('main-content')
<div class="container py-5">
    <h2 class="pb-3">Modifica Fumetto</h2>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row g-4">
            <div class="col-4">
                <label for="title">Titolo Fumetto</label>
                <input class="form-control mb-2" type="text" name="title" value="{{ $comic->title }}" required>
            </div>
            <div class="col-4">
                <label for="series">Serie Fumetto</label>
                <input class="form-control" type="text" name="series" value="{{ $comic->series }}" required>
            </div>
            <div class="col-4">
                <label for="type">Tipologia</label>
                <select class="form-select" name="type" id="type" required>
                    <option default="type">Tipologia</option>
                    <option @if ($comic->type == 'comic book') selected
                        
                    @endif value="comic book">Comic book</option>
                    <option @if ($comic->type == 'graphic novel') selected
                        
                    @endif value="graphic novel">Graphic novel</option>
                    <option @if ($comic->type == 'manga') selected
                        
                    @endif value="manga">Manga</option>
                    <option @if ($comic->type == 'fantasy') selected
                        
                    @endif value="fantasy">Fantasy</option>
                    <option @if ($comic->type == 'horror') selected
                        
                    @endif value="horror">Horror</option>
                </select>
            </div>
            <div class="col-12">
                <label for="description">Descrizione</label><br>
                <textarea class="form-control" type="text" name="description" rows="4">{{ $comic->description }}</textarea>
            </div>
            <div class="col-4">
                <label for="price">Prezzo</label>
                <input class="form-control" type="number" step="0.01" name="price" value="{{ $comic->price }}" required>
            </div>
            <div class="col-4">
                <label for="sale_date">Data di pubblicazione</label>
                <input class="form-control" type="text" name="sale_date" value="{{ $comic->sale_date }}" required>
            </div>
            <div class="col-4">
                <label for="thumb">Immagine di copertina</label><br>
                <input class="form-control" type="text" name="thumb" value="{{ $comic->thumb }}" required>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary px-5 me-2">Save</button>
            <input type="reset" value="Reset" class="btn btn-warning px-5 ms-2">
        </div>
    </form>
</div>

@endsection




