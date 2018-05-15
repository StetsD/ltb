@extends('default.layouts.layout')

@section('content')
<form method="post" action="{{ route('contact')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Site</label>
    <input type="text" name="site" class="form-control" id="exampleInputPassword1" placeholder="Site">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
