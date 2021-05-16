@extends('layouts.app')

@section('main')
<div class="jumbo"></div>
<div class="blue-stripe"></div>
<section class="info">
    <div class="info-comics">
        <div class="container">

            <div class="box-info">

                <div class="img-comic">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>

                <h1>{{$comic['title']}}</h1>

                <div class="availability">
                    <div class="price-availability">
                        <span>{{$comic['price']}}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="check-availability">
                        <span>Check Availability</span> <i class="fas fa-caret-down"></i>
                    </div>
                </div>


                <p>
                    {{$comic["description"]}}
                </p>
            </div>

            <div class="adv-box">

                <div class="advertisment">
                    <span>ADVERTISMENT</span>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- <section >
    <div class="container">
        <div class="box-left">
            <div class="">
                <h1>talent</h1>
            </div>
            <div class="">
                <div class="">
                    <h5>art by:</h5>
                </div>

                <div class="">

                </div>

            </div>


        </div>
    </div>
</section> -->




@endsection
