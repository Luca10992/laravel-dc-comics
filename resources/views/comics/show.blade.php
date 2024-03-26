@extends('layout.app')

@section('main-content')

<div class="blue-bar">
    <div class="container thumb d-flex justify-content-between align-items-center">
        <div class="thumb">
            <img src="{{ $comic->thumb }}" alt="">
            <div class="top">{{ strtoupper($comic->type) }}</div>
            <div class="bottom">VIEW GALLERY</div>
        </div>
        <div class="d-flex gap-3">
            <a href="{{ route('comics.edit', $comic) }}">
                <button class="btn btn-success px-4">Edit</button>
            </a>
            <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comic->id }}">
                Delete
              </button>
        </div>
    </div>
</div>
<div class="container desc py-5 d-flex gap-5">
    <div class="desc-box">
        <h2 class="title-comic">{{ $comic->title }}</h2>
        <div class="price-box d-flex">
            <div class="price d-flex justify-content-between p-2">
                <div>U.S. Price: <span>{{ $comic->price }} $</span></div>
                <div>AVAILABLE</div>
            </div>
            <div class="check ps-2 text-light py-2"><p class="m-0">Check Availability <span>▼</span></p></div>
        </div>
        <div class="description pt-2">{{ $comic->description }}</div>
    </div>
    <div class="adv-box">
        <p class="text-end">ADVERTISEMENT</p>
        <img src="{{ Vite::asset('resources/assets/images/adv.jpg') }}" alt="">
    </div>
</div>
<div class="info-comic-section">
    <div class="container d-flex gap-5">
        <div class="talent">
            <h2>Talent</h2>
            <hr>
            <div class="d-flex">
                <p class="fw-bold w-25 m-0">Art By:</p>
                <p class="w-75 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nam cum atque laboriosam cupiditate minus, perferendis nihil. Eius, earum nam, accusantium mollitia, soluta fugiat accusamus dicta aperiam eum perspiciatis repellendus.</p>
            </div>
            <hr>
            <div class="d-flex">
                <p class="fw-bold w-25 m-0">Written by:</p>
                <p class="w-75 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maiores officiis repellendus, dolorem laborum veritatis molestiae architecto, eius consequuntur quasi mollitia, dolor fugit magni quidem harum quae quaerat accusantium pariatur!</p>
            </div>
            <hr>
        </div>
        <div class="specs">
            <h2>Specs</h2>
            <hr>
            <div class="d-flex">
                <p class="fw-bold w-25 m-0">Series:</p>
                <p class="w-75 m-0"><a href="#">{{ strtoupper($comic->series) }}</a></p>
            </div>
            <hr>
            <div class="d-flex">
                <p class="fw-bold w-25 m-0">U.S. Price:</p>
                <p class="w-75 m-0">{{ $comic->price }} $</p>
            </div>
            <hr>
            <div class="d-flex">
                <p class="fw-bold w-25 m-0">On Sale Date:</p>
                <p class="w-75 m-0">{{ $comic->sale_date }}</p>
            </div>
            <hr>
        </div>
    </div>
</div>
<div class="link-info-comic">
    <div class="container d-flex justify-content-between">
        <div class="link d-flex justify-content-between">
            <div class="title">DIGITAL COMICS</div>
            <div class="logo"><img src="{{ Vite::asset('resources/assets/images/buy-comics-digital-comics.png') }}" alt=""></div>
        </div>
        <div class="link d-flex justify-content-between">
            <div class="title">SHOP DC</div>
            <div class="logo"><img src="{{ Vite::asset('resources/assets/images/buy-comics-merchandise.png') }}" alt=""></div>
        </div>
        <div class="link d-flex justify-content-between">
            <div class="title">COMIC SHOP LOCATOR</div>
            <div class="logo"><img src="{{ Vite::asset('resources/assets/images/buy-comics-shop-locator.png') }}" alt=""></div>
        </div>
        <div class="link d-flex justify-content-between">
            <div class="title">SUBSCRIPTION</div>
            <div class="logo"><img src="{{ Vite::asset('resources/assets/images/buy-comics-subscriptions.png') }}" alt=""></div>
        </div>
    </div>
</div>

@endsection

@section('modal')

@foreach ($comics as $comic)

  <div class="modal fade" id="deleteModal{{ $comic->id }}" tabindex="-1" aria-labelledby="deleteModal{{ $comic->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminare {{ $comic->title }}?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Così facendo il file verrà eliminato in maniera definitiva. Procedere?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  

@endforeach
    
@endsection