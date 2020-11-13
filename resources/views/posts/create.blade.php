@extends('dashboard')

@section('content')
<div class="container mt-5">
    <h3>Create</h3>
    <form action="/posts" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
        <input type="text" class="form-control" id="title" placeholder="Enter fullname" name="title">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="aprasymas" placeholder="Tell us more about this poll" name="aprasymas">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="specifikacija" placeholder="Tell us more about this poll" name="specifikacija">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="moduliai" placeholder="Tell us more about this poll" name="moduliai">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="extra" placeholder="Tell us more about this poll" name="extra">
      </div>
    
      <button type="submit" class="btn btn-default">Create</button>
    </form>
  </div>
@endsection