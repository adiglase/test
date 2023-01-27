@extends('layouts.main')

@section('container')
<style>
	.row{
		margin: 145px 0 145px 0;
	}
</style>
	<div class="row justify-content-center" style="font-family: 'Cormorant Garamond', serif; ">
		<div class="col-md-4">

			@if(session()->has('loginError'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				{{ session('loginError') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif  


			<main class="form-signin w-100 m-auto">
				<h1 class="h1 mb-3 fw-semibold text-center">Please Login</h1>
				<form action="/login" method="post">
					@csrf
					<div class="form-floating">
						<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
						<label for="username">Username</label>
						@error('username')
						<div class="invalid-feedback">
						{{ $message }}
						</div>
						@enderror
					</div>

					<div class="form-floating">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
						<label for="password">Password</label>
					</div>

					<button class="w-100 btn btn-lg text-white" style="background-color: #00bff3;" type="submit">Login</button>
				</form>
			</main>
		</div>
	</div>

@endsection