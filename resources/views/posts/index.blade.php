@extends('layouts.app')

@section('title')
index
@endsection

@section('content')

<div class="text-center">
  <a href="{{route('posts.create')}}" type="button" class="btn btn-success ">Create Post</a>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">created At</th>
      <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        {{-- @dd($posts) --}}
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['Title']}}</td>
        <td>{{$post['Posted By']}}</td>
        <td>{{$post['Created At']}}</td>
        <td>
          <a href="{{route('posts.show', $post['id'])}}" type="button" class="btn btn-info">View</a>
          <a href="{{route('posts.edit',$post['id'])}}" type="button" class="btn btn-primary">Edit</a>
          <form style="display: inline" method="POST" action="{{route('posts.destroy', $post['id'])}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delet</button>

          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


  @endsection
