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
						Update Daftar Harga
					</div>

					<div class="card-body">
						<form action="{{ route('price.update', ['id'=>$prices->id] ) }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							
							<div class="form-group">
								<label for="name">Nama Produk</label>
								<input type="text" name="post_id" value="{{ $postDetail->title }}" class="form-control" disabled>
							</div>
							<div class="form-group">
								<label for="name">Harga Normal</label>
								<input type="text" name="harga_normal" value="{{ $prices->harga_normal }}" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Harga Diskon</label>
								<input type="text" name="harga_diskon" value="{{ $prices->harga_diskon }}" class="form-control">
							</div>

							<div class="form-group"> 
								<div class="text-center">
									<button class="btn btn-danger" type="submit">
										Update Daftar Harga
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