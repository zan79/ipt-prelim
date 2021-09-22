@extends('base')

@section('navbar')

<nav class="navbar navbar-expand-lg navbar-light fixed-top bs bg-light">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/dashboard') }}">Prelim App</a>
    <form class="d-flex">
      <ul class="navbar-nav">
        <a class="btn btn-danger" href="{{ url('/logout') }}">Logout</a>
      </ul>
    </form>
  </div>
</nav>

@endsection

@section('content')

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
  <h1 style="font-size: 4rem;">Welcome to the Dashboard</h1>
</div>

@endsection