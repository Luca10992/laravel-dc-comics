@extends('layout.app')
@section('title-content')

Comics

@endsection

@section('main-content')

<div class="container relative">
    <div>CURRENT SERIES</div>
</div>

<div class="comics">
    <div class="container pt-5 pb-4">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <a href="{{ route('comics.show', $comic) }}">
                            <img src="{{ $comic->thumb }}" alt="">
                            <p>{{ strtoupper($comic->series) }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('comics.create') }}">
                <button class="btn btn-primary">ADD COMIC</button>
            </a>
        </div>
        {{ $comics->links() }}
    </div>
</div>

@endsection