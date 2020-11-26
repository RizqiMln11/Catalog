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
						Buat Daftar Harga
					</div>

					<div class="card-body">
						<form action="{{ route('price.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">Produk</label>
								<select name="post_id" class="form-control">
									@foreach($posts as $post)
										<option value="{{$post->id}}">{{$post->title}}</option>
									@endforeach
								</select>
                            </div>
							<div class="form-group">
								<label for="name">Harga Normal</label>
								<input type="number" name="harga_normal" class="form-control">
                            </div>
                            <div class="form-group">
								<label for="name">Harga Diskon</label>
								<input type="number" name="harga_diskon" class="form-control">
							</div>
							<div class="form-group"> 
								<div class="text-center">
									<button class="btn btn-danger" type="submit">
										Store Harga
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