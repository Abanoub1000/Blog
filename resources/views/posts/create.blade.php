@extends('layouts.app')

@section('title')
Create
@endsection


@section('content')


<form method="POST" action="{{route('posts.store')}}">
@csrf
    <div class="mt-4 bordered">
      <label for="" class="form-label">Title</label>
      <input name="title" type="text" class="form-control">
    </div>

    <div class="mb3">
      <label for="" class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

<div class="mb-3">
  <label for="" class="form-label">Post Creator</label>
  <select name="post_creator" id="" class="form-control">
    <option value="1">Ahmed</option>
    <option value="2">Mohamed</option>
  </select>
</div>
<button  class="btn btn-success">Submit</button>


</form>
@endsection
