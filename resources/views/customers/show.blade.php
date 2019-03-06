@extends('layout')

@section('title', 'Details for '.$customer->name)

@section('content')
  <div>
    <h1>{{$customer->name}}'s information</h1>
    <p><a href="/customers/{{$customer->id}}/edit">Edit</a></p>

    <form action="/customers/{{$customer->id}}" method="POST">
      @method('DELETE')
      @csrf
      <button type="submit">Delete</button>
    </form>
  </div>
  <div>
    <p><strong>Name:</strong> {{$customer->name}}</p>
    <p><strong>Email:</strong> {{$customer->email}}</p>
    <p><strong>Company:</strong> {{$customer->company->name}}</p>
    <p><strong>Status:</strong> {{$customer->active}}</p>
  </div>
@endsection

