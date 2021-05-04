@extends('public.layout.pages-layout')

@section('description', 'Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.')

@section('title', 'Checkout')

@section('breadcrumb')
    <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
        <h1 class="headingIV fwEbold playfair mb-4">Checkout</h1>
        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
            <li class="mr-sm-2 mr-1"><a href="/">Home</a></li>
            <li class="mr-sm-2 mr-1">/</li>
            <li class="active">Checkout</li>
        </ul>
    </div>
@endsection

@section('content')
<!-- checkout-area start -->
<div class="checkout-area ptb-100">
	<div class="container">
		<form action="" method="post">
			<div class="row">

				<div class="col-lg-6 col-md-12 col-12">
					<form method="POST">
						@csrf
						<div class="checkbox-form">
							<h3>Billing Details</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label> Name </label>
										{{-- <input type="text" value="{{$customer->name}}" disabled /> --}}
										<p>{{$user->name}}</p>

									</div>
								</div>

								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Email </label>
										{{-- <input type="email" value="{{$customer->email}}" disabled /> --}}
										<p>{{$user->email}}</p>

									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Phone <span class="required">*</span></label>
										@if ($user->user_mobile =='Add phone number')
										<input type="text" name='user_mobile' value="{{$user->user_mobile}}"/>
										@if ($errors->has('user_mobile'))
										<div class="alert alert-danger">{{ $errors->first('phone') }}</div>
										@endif
										<input type="hidden" name="phoneRequired" value="1">
										@else
										<p>{{$user->user_mobile}}</p>

										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Address <span class="required">*</span></label>
										<input type="text" name="user_address" placeholder="City / st." value="{{$user->user_address}}" />
										@if ($errors->has('user_address'))
										<div class="alert alert-danger">{{ $errors->first('user_address') }}</div>
										@endif
									</div>
								</div>
							</div>
							{{-- <div class="different-address">
								<div class="order-notes">
									<div class="checkout-form-list mrg-nn">
										<label>Order Notes</label>
										<textarea id="checkout-mess" cols="30" rows="10"
											placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
									</div>
								</div>
							</div> --}}
						</div>
					</form>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					<div class="your-order">
						<h3>Your order</h3>
						<div class="your-order-table table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-name">Product</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($cartDetails as $item)
									<tr class="cart_item">
										<td class="product-name">
											{{$item["product"]->name}} <strong class="product-quantity"> × {{$item["qty"]}}</strong>
										</td>
										<td class="product-total">
											<span class="amount">${{$item["product"]->price * $item["qty"]}}</span>
										</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">${{$total}}</span></td>
									</tr>
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">${{$total}}</span></strong>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							<div class="payment-accordion">
								<div class="panel-group" id="faq">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false"
													data-parent="#faq" href="#payment-2">Cash on Delivery</a></h5>
										</div>
									</div>

								</div>
								<div class="order-button-payment">
									<a href="my-account"> <input type="submit" value="Place order" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection