@extends('master')
@section('content')
<div class="custom-product">
    <div style="margin-left: 5rem">
        <div class="tranding-wraper">
            <h4>Result For Products</h4>
            @foreach ($products as $item)
            <div class="tranding-item">
               <a href="detaile/{{$item->id}}">
                <img class="tranding-img" src="{{$item->gallery}}" alt="">
                <div>
                  <h2>{{$item->name}}</h2>
                  <h6>{{$item->description}}</h6>
                </div>
              </div>
            </a>
          </div>
            @endforeach
    </div>


</div>
@endsection
