@extends('layout.app')

@section('title-content', 'Add comic')

@section('main-content')
<div class="container py-5">
    <h2 class="pb-3">Aggiungi Fumetto</h2>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="row g-4">
            <div class="col-4">
                <label for="title">Titolo Fumetto</label>
                <input class="form-control mb-2" type="text" name="title">
            </div>
            <div class="col-4">
                <label for="series">Serie Fumetto</label>
                <input class="form-control" type="text" name="series">
            </div>
            <div class="col-4">
                <label for="type">Tipologia</label>
                <select class="form-select" name="type" id="type">
                    <option default="type">Tipologia</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                    <option value="manga">Manga</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="horror">Horror</option>
                </select>
            </div>
            <div class="col-12">
                <label for="description">Descrizione</label><br>
                <textarea class="form-control" type="text" name="description" rows="4"></textarea>
            </div>
            <div class="col-4">
                <label for="price">Prezzo</label>
                <input class="form-control" type="number" step="0.01" name="price">
            </div>
            <div class="col-4">
                <label for="sale_date">Data di pubblicazione</label>
                <input class="form-control" type="text" name="sale_date">
            </div>
            <div class="col-4">
                <label for="thumb">Immagine di copertina</label><br>
                <input class="form-control" type="text" name="thumb">
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary px-5 me-2">Save</button>
            <input type="reset" value="Reset" class="btn btn-warning px-5 ms-2">
        </div>
    </form>
</div>

@endsection




