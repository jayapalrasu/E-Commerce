@extends('master')
@section('content')
    <div>
        <div style="display: flex;justify-content:space-around;">
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/f15c02bfeb02d15d.png?q=100"
                    alt=""><br> <b> Top Offers
                    Grocery</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100"
                    alt=""><br> <b>Grocery</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?q=100"
                    alt=""><br> <b>Mobiles</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/c12afc017e6f24cb.png?q=100"
                    alt=""><br><b>Fashion</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?q=100"
                    alt=""><br> <b>Electronics</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/ab7e2b022a4587dd.jpg?q=100"
                    alt=""><br> <b>Home</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/0ff199d1bd27eb98.png?q=100"
                    alt=""><br> <b>Appliances</b>
            </div>
            <div align="center">
                <img style="" src="https://rukminim1.flixcart.com/flap/128/128/image/dff3f7adcf3a90c6.png?q=100"
                    alt=""><br><b>Beauty, Toys & More</b>
            </div>
        </div>
    </div>
    {{-- <style>
    justify-content: flex-start;
</style> --}}
    <div class="custom-product" style="margin-top: 1rem">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detaile/{{ $item->id }}">
                            <img class="slider-img" src="{{ $item->gallery }}" alt="Chania">
                            <div class="carousel-caption slider-text">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="tranding-wraper">
                <h3>Tranding Products</h3>
                @foreach ($products as $item)
                    <div class="tranding-item">
                        <a href="detaile/{{ $item->id }}">
                            <img class="tranding-img" src="{{ $item->gallery }}" alt="">
                            <div>
                                <h3>{{ $item->name }}</h3>
                            </div>
                    </div>
                    </a>
            </div>
            @endforeach

        </div>
    @endsection
