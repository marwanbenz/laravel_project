@extends('layouts.admin')
@section('pageTitle')
	Users list
@endsection
@section('content')
<br>
	<a href="{{ url('/employer/create') }}" class="btn btn-primary">Create new employer</a>
<br>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Adress</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($employers as $employer)
		    <tr>
		      <th scope="row">{{ $employer->id }}</th>
		      <td>{{ $employer->first_name }}</td>
		      <td>{{ $employer->last_name }}</td>
		      <td>{{ $employer->email }}</td>
		      <td>{{ $employer->adress }}</td>
		    </tr>
		    @endforeach
		    
		  </tbody>
		</table>

@endsection