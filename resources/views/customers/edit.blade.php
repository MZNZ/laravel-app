@extends('layouts.app')

@section('title', 'Edit details for '.$customer->name)

@section('content')
  <h1>Edit details for {{$customer->name}}</h1>
<form action="{{ route('customers.update', ['customer' => $customer]) }}" method="POST">
    @method('PUT')
    @include('customers.form')

    <button type="submit">Save Customer</button>
  </form>
@endsection

