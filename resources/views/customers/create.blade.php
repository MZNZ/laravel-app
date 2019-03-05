@extends('layout')

@section('title', 'Add New Customer')

@section('content')
  <h1>Add New Customer</h1>
  <form action="/customers" method="POST">
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
@endsection

