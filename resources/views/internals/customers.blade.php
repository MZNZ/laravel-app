@extends('layout')

@section('title', 'Customer List')

@section('content')
  <h1>Customers List</h1>
    <form action="customers" method="POST">
      <div>
        <label for="name">Name: </label>
        <input type="text" name="name" value={{ old('name')}}>
        <div>{{ $errors->first('name')}}</div>
      </div>

      <div>
        <label for="email">Email: </label>
        <input type="text" name="email" value={{ old('email')}}>
        <div>{{ $errors->first('email')}}</div>
      </div>

      <div>
        <label for="active">Status: </label>
        <select name="active" id="active">
          <option value="" disable>Select</option>
          <option value="1" >Active</option>
          <option value="0" >Inactive</option>
        </select>
      </div>

      <div>
        <label for="company_id">Status: </label>
        <select name="company_id" id="company_id">
          @foreach ($companies as $company)
            <option value="{{$company->id}}" >{{$company->name}}</option>
          @endforeach
        </select>
      </div>

      <button type="submit">Add Customer</button>
      @csrf
    </form>
    <hr>

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

