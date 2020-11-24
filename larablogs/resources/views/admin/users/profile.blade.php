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
						Edit Your Profile
					</div>
					<div class="card-body">
						<form action=" {{ route('user.profile.update') }} " method="Post" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">UserName</label>
								<input type="text" name="name" value="{{ $user->name }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" value="{{ $user->email }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="password"> New Password</label>
								<input type="password" name="password" class="form-control">
							</div>

							<div class="form-group">
								<label for="image">Upload New Avatar</label>
								<img src="{{ asset($user->profile->avatar ?? '') }}" alt="" width="100" height="auto">
								<input type="file" name="avatar" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Vision</label>
								<input type="name" name="vision" value="{{ $user->profile->vision ?? '' }}" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Mission</label>
								<input type="name" name="mission" value="{{ $user->profile->mission ?? '' }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="name">Facebook Profile</label>
								<input type="name" name="facebook" value="{{ $user->profile->facebook  ?? ''}}" class="form-control">
							</div>

							<div class="form-group">
								<label for="about">About you</label>
								<textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about  ?? ''}}</textarea>
							</div>

							<div class="form-group">
								<label for="password">Youtube Profile</label>
								<input type="name" name="youtube" value="{{ $user->profile->youtube  ?? ''}}" class="form-control">
							</div>

							<div class="form-group"> 
								<div class="text-center">
									<button class="btn btn-danger" type="submit">
										Update Profile
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