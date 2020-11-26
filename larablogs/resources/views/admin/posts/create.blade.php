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
						Create New Post
					</div>

					<div class="card-body">
						<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control">
							</div>

							<div class="form-group">
								<label for="featured">Featured Image</label>
								<input type="file" name="featured" class="form-control">
							</div>

							<div class="form-group">
								<label for="category"> Select a Category</label>
								<select name="category_id" id="category" class="form-control">
									@foreach($categories as $category)

										<option value="{{ $category->id }}">{{ $category->name }}</option>


									@endforeach
								</select>
							</div>



							<div class="form-group">
								<label for="tags"> Select Tags</label>
								@foreach($tags as $tag)
								<div class="checkbox">
                                    <label>
                                       <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }} <br>
                                    </label>
                                </div>
								@endforeach
							</div>


							<div class="form-group">
								<label for="content"> Content </label>
								<textarea name="content" id="content" cols="50" rows="20" class="form-control"></textarea>
							</div>

							<div class="form-group"> 
								<div class="text-center">
									<button class="btn btn-danger" type="submit">
										Store Post
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

