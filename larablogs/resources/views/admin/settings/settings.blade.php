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
						Edit Blog Settings
					</div>

					<div class="card-body">
						<form action="{{ route('settings.update') }}" method="POST">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">  Site_name </label>
								<input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="name"> Address </label>
								<input type="text" name="address" value="{{ $settings->address }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="name"> Contact_number </label>
								<input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="name"> Contact_email </label>
								<input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
							</div>

							<div class="form-group"> 
								<div class="text-center">
									<button class="btn btn-danger" type="submit">
										Update Site Settings
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