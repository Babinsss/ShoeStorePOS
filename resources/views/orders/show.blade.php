@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <p><strong>User:</strong> {{ $order->user->name }}</p>
    <p><strong>Product:</strong> {{ $order->product->name }}</p>
    <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
    <!-- Add other order fields -->
</div>
@endsection
