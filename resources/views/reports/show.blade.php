@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Report Details</h1>
    <p><strong>User:</strong> {{ $report->user->name }}</p>
    <p><strong>Transaction:</strong> {{ $report->transaction->id }}</p>
    <!-- Add other report fields -->
</div>
@endsection
