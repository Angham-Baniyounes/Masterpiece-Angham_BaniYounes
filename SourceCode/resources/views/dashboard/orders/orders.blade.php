@extends('dashboard.layout.main')
@section('content')
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Orders Data</h5>
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Address</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Customer ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordersTable as $order)
                            <tr>
                                <td>{{ $order['order']->id }}</td>
                                <td>{{ $order['order']->address }}</td>
                                <td>{{ $order['order']->total_price }}</td>
                                <td>{{ $order['order']->total_quantity }}</td>
                                <td>
                                    <select id="{{ $order['order']->id }}" name="status" class="form-control"
                                        onchange="statusChange({{ $order['order']->id }})">
                                        <option value="Processing">Processing
                                        </option>
                                        <option value="Shiping"
                                            {{ $order['order']->status == 'Shiping' ? 'selected' : '' }}>Shiping</option>
                                        <option value="Completed"
                                            {{ $order['order']->status == 'Completed' ? 'selected' : '' }}>Completed
                                        </option>
                                    </select>
                                </td>
                                <td>{{ $order['order']->customer_id }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">

                                    <table class="table table-borderless table-data3">
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Quantity</th>
                                        </tr>
                                        @foreach ($order['order_products'] as $order_products)
                                            <tr>
                                                <td>{{ $order_products->product_id }}</td>
                                                <td>{{ $order_products->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                                </t>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function statusChange(id) {
            var e = document.getElementById(id);
            var status = e.value;
            alert(status)
            document.location.href = `/admin/orders/${id}/${status}`;
        }
        //   $('#status').on('change', function() {
        //   alert( this.value );
        // });

    </script>
@endsection
