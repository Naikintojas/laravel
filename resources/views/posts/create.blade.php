@extends('dashboard')

@section('content')
<div class="container mt-5">
    <h3>Create</h3>
    <form action="/posts" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="cname" placeholder="Enter Company name" name="cname">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="date" placeholder="Enter date u started" name="date">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="about" placeholder="Tell us more about your company" name="about">
      </div>
      <button type="submit" class="btn btn-default">Create</button>
    </form>
  </div>
@endsection