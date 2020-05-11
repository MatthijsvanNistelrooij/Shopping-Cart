
@extends('layouts.master')

@section('title')

@endsection


@section('content')

<br><br>

@if(Session::has('cart'))
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width: 5%">Quantity</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>

@foreach ($products as $product)
							<td data-th="Product">
								<div class="row">

									{{-- <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div> --}}
									<div class="col-sm-10">
										<h4 class="nomargin">{{ $product['item']['title'] }}</h4>

									</div>
								</div>
							</td>
							<td data-th="Price"> <strong>${{ $product['price'] }}</strong> </td>
							<td data-th="Quantity">
                                <span style="float: right"> <strong>{{ $product['qty']}}</strong>  </span>

							</td>

							<td class="actions" data-th="">

                                <div class="btn-group">
                                    <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                    <li><a href="#" style="text-decoration: none"> &nbsp; Remove 1</a></li>
                                        <br>
                                    <li><a href="#" style="text-decoration: none"> &nbsp; Remove All</a></li>
                                    </ul>
                                    </div>


							</td>
                        </tr>

@endforeach
                    </tbody>

					<tfoot>
                        <br><br>
						<tr class="visible-xs">

                        </tr>
						<tr>

							<td><a href="/" class="btn btn-warning" style="color: white"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>

                            <td><strong>Total ${{ $totalPrice }},00</strong></td>
                            <td></td>
							<td><a href="checkout" class="btn btn-success" style="width: 165px">Checkout <i class="fa fa-angle-right"></i>
                            </a></td>
                            {{-- <td></td> --}}
                        </tr>

					</tfoot>
                </table>
                <hr>
</div>
@else

        <div class="row">
        <div class="col-sm-12">
        <h2> You Have No Items in Your Cart</h2>
        </div>
        </div>


@endif

@endsection


{{--

@if(Session::has('cart'))
        <div class="container" style="margin: auto">

        <div class="row">
        <div class="col-sm-12">
        <ul class="list-group">


            <br><br>
            <h1>Your Shopping Cart</h1>
            <br>
@foreach ($products as $product)


        <li class="list-group-item" style="border: 1px solid rgb(226, 226, 226)">

        <strong style="padding: 3%">{{ $product['item']['title'] }}  </strong>

        <span class="badge badge-info badge-pill" style="margin-left:15px; display:inline-block"> $ {{ $product['price'] }},00</span>
        <span class="badge badge-secondary badge-pill" style="float: right"> {{ $product['qty']}} </span>


        <div class="btn-group">
        <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" style="margin-left: 25%">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a href="#" style="text-decoration: none"> &nbsp; Remove 1</a></li>
        <li><a href="#" style="text-decoration: none"> &nbsp; Remove All</a></li>
        </ul>
        </div>

     </li>

@endforeach

        </ul>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-6">
        <strong>Total: ${{ $totalPrice }},00</strong>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-6 col-md-6">
        <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
        </div>
        </div>
    </div>
@else

        <div class="row">
        <div class="col-sm-12">
        <h2>  No Items in Your Cart</h2>
        </div>
        </div>


@endif

@endsection
 --}}
