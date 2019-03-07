@extends('master')

@section('title', 'Contact Us')

@section('content')
  <h1>Contact Us</h1>
  @if ( !session()->has('message'))
    <form action="/contact" method="POST">
      <div>
        <lable for="name">Name:</lable>
        <input type="text" name="name" value="{{ old('name')}}"/>
        <div>{{ $errors->first('name') }}</div>
      </div>

      <div>
        <lable for="email">Email:</lable>
        <input type="text" name="email" value="{{ old('email')}}"/>
        <div>{{ $errors->first('email') }}</div>
      </div>

      <div>
        <lable for="message">Message:</lable>
        <input type="text" name="message" value="{{ old('message')}}"/>
        <div>{{ $errors->first('message') }}</div>
      </div>
      @csrf
      <button type="submit">Submit</button>
    </form>
  @endif
@endsection