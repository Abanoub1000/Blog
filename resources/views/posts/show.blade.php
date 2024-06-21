@extends('layouts.app')

@section('title')
show
@endsection



@section('content')


<div class="card mt-4">
  <h5 class="card-header">Post Info</h5>
    <div class="card-body">
      <h5 class="card-title">Title: - {{$post['Title']}}</h5>
      <p class="card-text">Description: - {{$post['Description']}}</p>
      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
  </div>


  <div class="card mt-2">
    <h5 class="card-header">Post Creator Info</h5>
    <div class="card-body">
      <h5 class="card-title">Name: - {{$user['name']}}</h5>
      <p class="card-text">Email: - {{$user['Email']}}</p>
      <p class="card-text">Created At :- {{$user['Created At']}} </p>
      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
  </div>

    @endsection
