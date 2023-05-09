@extends('layouts.app')


@section('content')
<div class="container ">
    <div class="row">
        <h1 class="col align-self-center"> Students </h1>
        <a class="btn btn-primary col-auto align-self-end" href="{{ route('posts.create') }}" >Posts</a>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">IDno</th>

      <th scope="col">id</th>

      <th scope="col">update</th>
      <th scope="col">delete</th>


  </thead>
  <tbody>
    @foreach($posts as $post )
    <tr>
      <th scope="row">1</th>
      <td>{{$post->name}}</td>
      <td>
        {{$post->age}}
      </td>
      <td>
        {{$post->IDno}}
      </td>
      <td>
        {{$post->id}}
      </td>
      <td>
      <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Update</a>

      </td>
      <td>
<form action="{{route('posts.destroy',$post->id)}}" method="post">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
