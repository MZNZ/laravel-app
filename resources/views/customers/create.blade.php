@extends('master')

@section('title', 'Add New Customer')

@section('content')
  <h1>Add New Customer</h1>
  <form action="/customers" method="POST">
    @include('customers.form')

    <button type="submit">Add Customer</button>
  </form>
@endsection

