@extends('layouts.admin')
@section('pageTitle')
	Employer list
@endsection
@section('content')
<br>
	<a href="{{ url('/employer') }}" class="btn btn-primary">Employers list</a>
<br>

		@if(!empty($success))
			<br><div class="alert alert-success">{{ $success }}</div>
		@endif

		@if(!empty($error))
			<br><div class="alert alert-danger">{{ $error }}</div>
		@endif

		<form action="{{ url('employer/create') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="name">First name :</label>
				<input type="text" class="form-control" name="firstname" placeholder="First Name" id="firstName">
			</div>

			<div class="form-group">
				<label for="name">Last name :</label>
				<input type="text" class="form-control" name="lastname" placeholder="Last Name" id="lastName">
			</div>

			<div class="form-group">
				<label for="pass">Email :</label>
				<input type="email" class="form-control" name="email"  id="pass">
			</div>

			<div class="form-group">
				<label for="adress">Adress :</label>
				<input type="text" class="form-control" name="adress"  id="pass">
			</div>

			<button type="submit" class="btn btn-success">Save</button>
		</form>

@endsection