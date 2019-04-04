	@extends('layouts.header')

@section('content')
	<table>
		<tr>
			<td>order</td>
			<td> : </td>
		<!-- @foreach($orders as $p)
			<td>{{$p->order}}</td> -->

			
		</tr>
		@endforeach
	</table>
<h1>Prepaid Balance</h1>
<form class="form-horizontal" action="order" method="post">
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" name="mobile_number" class="form-control" id="inputEmail3" placeholder="Mobile Number">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
        <select class="form-control" name="value">
            <option>10000</option>
            <option>50000</option>
            <option>100000</option>
        </select>
    </div>
  </div>
  <div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="post">
  <input type="hidden" name="email" value="{{Auth::user()->email}}">
  </div>
  <div class="col-sm-6">
    <button type="submit" name="submit" value="post" class="btn btn-primary">Submit</button>
  </div>
@endsection


