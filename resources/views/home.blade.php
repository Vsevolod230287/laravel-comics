@extends('layouts.app')

@section('main')
<div class="jumbo"></div>

<section id="main-comics">
    <div class="container">
        <div class="current-series">
            <h1>CURRENT SERIES</h1>
        </div>
        @foreach ($comics as $index => $comic)
        <div class="card">
            <div class="thumb-img">
                <a href="{{route('info', ['id' => $index])}}">
                    <img src="{{$comic['thumb']}}" alt="">
                </a>
            </div>
            <!--
            <div class="comic-series">
              <span>{{$comic['series']}}</span>
            </div> -->
        </div>
        @endforeach
        <div class="div-button">
            <button type="button" name="button">LOAD MORE</button>
        </div>
    </div>
</section>
<section id="main-comics-menu">
    <div class="container">
        <ul>
            <li><img src="\img\buy-comics-digital-comics.png" alt="">DIGITAL COMICS</li>
            <li><img src="\img\buy-comics-merchandise.png" alt="">DC MERCHANDISE</li>
            <li><img src="\img\buy-comics-subscriptions.png" alt="">SUBSCRIPTION</li>
            <li><img src="\img\buy-comics-shop-locator.png" alt="">COMIC SHOP LOCATOR</li>
            <li><img src="\img\buy-dc-power-visa.svg" alt="">DC POWER VISA</li>
        </ul>
    </div>
</section>





@endsection
