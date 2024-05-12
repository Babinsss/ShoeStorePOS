@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transactions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Order</th>
                <th>Payment Method</th>
                <!-- Add other transaction fields -->
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->user->name }}</td>
                    <td>{{ $transaction->order->id }}</td>
                    <td>{{ $transaction->payment_method->name }}</td>
                    <!-- Add other transaction fields -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
