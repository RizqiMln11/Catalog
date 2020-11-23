@extends('layouts.app')


@section('content')


	@if(count($errors) > 0 )

		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list-group-item text-danger">
					{{ $error }}
				</li>
			@endforeach
		</ul>

	@endif
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Create New User
					</div>

					<div class="card-body">
						<form action=" {{ route('user.store') }} " method="Post">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">User</label>
								<input type="text" name="name" class="form-control">
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control">
							</div>

							<div class="form-group"> 
								<div class="text-center">
									<button class="btn btn-danger" type="submit">
										Add User
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop