@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12 mb-5 subForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Update Order</h3>
            </div>
            <div class="card-body">
                <form action='/admin/order/{{$order['id']}}' method='POST' enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Total</label>
                        <input type="number" name="total" placeholder="Total" class="form-control" value="{{$order['total']}}">
                        @error('total')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Quantity</label>
                        <input type="number" name="quantity" placeholder="Quantity" class="form-control" value="{{$order['quantity']}}">
                        @error('quantity')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Payment Type</label>
                        <select class="custom-select form-control" name="payment_type">
                            <option selected>Status</option>
                            <option value="0">Paypal</option>
                            <option value="1">Cash on delivery</option>
                        </select>
                        @error('payment_type')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Details</label>
                        <input type="number" name="details" placeholder="Product Discount" class="form-control">
                        @error('details')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Description</label>
                        <input type="text" name="description" placeholder="description ..." class="form-control">
                        @error('description')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection