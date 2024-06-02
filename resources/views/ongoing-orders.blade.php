@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ongoing Orders</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Order Date</th>
                <th>Order Items</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ongoingOrders as $order)
            <tr>
                <td>{{ $order->order_id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    @foreach($order->items as $item)
                        {{ $item->name }}<br>
                    @endforeach
                </td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->status }}</td>
                <td><a href="{{ route('order.details', $order->order_id) }}" class="btn btn-primary">View Details</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
