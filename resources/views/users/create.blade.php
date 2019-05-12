@extends('layouts.admin')
@section('pageTitle')
	Users list
@endsection
@section('content')
<br>
	<a href="{{ url('/users') }}" class="btn btn-primary">Users list</a>
<br>

		@if(!empty($success))
			<br><div class="alert alert-success">{{ $success }}</div>
		@endif

		@if(!empty($error))
			<br><div class="alert alert-danger">{{ $error }}</div>
		@endif

		<form action="{{ url('users/create') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="name">User name :</label>
				<input type="text" class="form-control" name="name" placeholder="User name" id="name">
			</div>

			<div class="form-group">
				<label for="email">User email :</label>
				<input type="email" class="form-control" name="email" placeholder="User email" id="email">
			</div>

			<div class="form-group">
				<label for="pass">User password :</label>
				<input type="password" class="form-control" name="password"  id="pass">
			</div>

			<button type="submit" class="btn btn-success">Save</button>
		</form>

@endsection