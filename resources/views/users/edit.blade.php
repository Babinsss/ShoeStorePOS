@extends('layouts.app')
@section('content')
<form method="POST" action="/users/{{ $user->id }}">
    @csrf
    @method('PUT')
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ $user->name }}"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="{{ $user->email }}"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Update">
</form>
@endsection