@extends('layouts.header')

@section('content')
<h1>Product Page</h1>
<form class="form-horizontal" action="create" method="post">
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" name="product" class="form-control" id="inputEmail3" placeholder="Product">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
      <textarea type="text" name="shipping" class="form-control" id="inputEmail3" placeholder="Shipping Address"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="Price">
    </div>
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="post">
  <input type="hidden" name="email" value="{{Auth::user()->email}}">
  <div class="col-sm-6">
    <button type="submit" name="submit" value="post" class="btn btn-primary">Submit</button>
  </div>
@endsection

