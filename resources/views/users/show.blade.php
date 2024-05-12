@extends('layouts.app')
@section('content')
<h1>{{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>
<a href="/users/{{ $user->id }}/edit">Edit</a>
<form method="POST" action="/users/{{ $user->id }}">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
@endsection