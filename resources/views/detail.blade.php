@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detaile-img" src="{{ $product->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{ $product->name }}</h2>
                <h3><b>Price :</b> ${{ $product->price }}.rs</h3>
                <h4><b>Details :</b> {{ $product->description }}</h4>
                <h4><b>Category :</b> {{ $product->category }}</h4>
                <br>
                <div style="display: flex;">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form>
                    <form action="/buy" method="POST">
                        @csrf
                        <input type ="hidden" name = "product_id" value ="{{$product->id}}" >
                        <button style="margin-left: 2rem;" class="btn btn-success">Buy</button>
                    </form>

                </div>
                <br><br>
            </div>
        </div>
        <div>
            @foreach (App\Models\Detaile::get() as $item)
            <h5><b>No Cost EMI</b></h5>
            <p>{{$item->emi}}</p><br>
            <h5><b>EMI on Debit Cards</b></h5>
            <p>{{$item->depit_cart}}</p><br>
            <h5><b>Mobile Exchange Offers</b></h5>
            <p>{{$item->offer}}</p><br>
            <h5><b>Home and Furniture</b></h5>
            <p></p>{{$item->home_detaile}}<br><br>
            @endforeach
        </div>
        <style>
            h5{
                color: gray;
            }
        </style>
    </div>
@endsection
