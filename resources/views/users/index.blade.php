@extends('layouts.admin')
@section('pageTitle')
	Users list
@endsection
@section('content')
<br>
	<a href="{{ url('/users/create') }}" class="btn btn-primary">Create new user</a>
<br>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($users as $user)
		    <tr>
		      <th scope="row">{{ $user->id }}</th>
		      <td>{{ $user->name }}</td>
		      <td>{{ $user->email }}</td>
		      <td>
		      	<a class="btn btn-info" href="{{ route('users.edit', $user->id)}}">Edit</a>
		      </td>
		    </tr>
		    @endforeach
		    
		  </tbody>
		</table>

@endsection