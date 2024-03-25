@extends('layout.app')

@section('main-content')

<div class="blue-bar">
    <div class="container thumb">
        <div class="thumb">
            <img src="{{ $comic->thumb }}" alt="">
            <div class="top">{{ strtoupper($comic->type) }}</div>
            <div class="bottom">VIEW GALLERY</div>
        </div>
    </div>
</div>
<div class="container desc py-5 d-flex gap-5">
    <div class="desc-box">
        <h2 class="title-comic">{{ $comic->title }}</h2>
        <div class="price-box d-flex">
            <div class="price d-flex justify-content-between p-2">
                <div>U.S. Price: <span>{{ $comic->price }}</span></div>
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
                <p class="w-75 m-0">{{ $comic->price }}</p>
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