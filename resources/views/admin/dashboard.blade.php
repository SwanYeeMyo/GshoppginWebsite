@extends('layouts.app')
@section('content')
    <h5>Dashboard</h5>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-primary">Logout</button>
    </form>
@endsection
