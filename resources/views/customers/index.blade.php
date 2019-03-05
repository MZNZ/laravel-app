@extends('layout')

@section('title', 'Customer List')

@section('content')
  <div>
    <h1>Customers List</h1>
    <p><a href="customers/create">Add New Customer</a></p>
  </div>

  <div>
    <ul>
      @foreach ($customers as $customer)
        <li><strong>{{$customer->name}}</strong> {{$customer->email}} ({{$customer->company->name}}) {{$customer->active}}</li>
      @endforeach
    </ul>
  </div>
@endsection
