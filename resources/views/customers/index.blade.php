@extends('layout')

@section('title', 'Customer List')

@section('content')
  <div>
    <h1>Customers List</h1>
    <p><a href="customers/create">Add New Customer</a></p>
  </div>

  <div>
    <h3>Active Customers</h3>
    <ul>
      @foreach ($activeCustomers as $customer)
        <li><strong>{{$customer->name}}</strong> {{$customer->email}} ({{$customer->company->name}})</li>
      @endforeach
    </ul>
  </div>

  <div>
    <h3>Inactive Customers</h3>
    <ul>
      @foreach ($inactiveCustomers as $customer)
        <li><strong>{{$customer->name}}</strong> {{$customer->email}} ({{$customer->company->name}})</li>
      @endforeach
    </ul>
  </div>
@endsection

