




@extends('layouts.master')

@section('title')

@endsection


@section('content')

@foreach($products->chunk(3) as $productChunk)
<div class="row" >

    @foreach($productChunk as $product)

    
    <div class="col-sm-6 col-md-4">
        <br>
        <div class="card mb-4 shadow-sm" >
        <img src="{{ $product->imagePath}}" class="image-responsive">

          <div class="card-body" >
              <h3 >{{ $product->title }}</h3>
            <p class="card-text">{{ $product->description}}</p>
            <div class="d-flex justify-content-between align-items-center">
                   <div class="text-muted">${{ $product->price}}</div>
                   <div class="btn-group clearfix">
                       <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-sr btn-success">Add To Cart</a>
                        &nbsp;
              </div>

            </div>
          </div>
        </div>
      </div>

    @endforeach

       </div>
@endforeach
<br><br>


@endsection

