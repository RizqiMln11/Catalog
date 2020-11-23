@extends('layouts.app')


@section('content')

<div class="card">

	<div class="card-header">
		Published Post
	</div>

	<div class="card-body">

 <table class="table table-hover">
 	<thead>
 		<th>
 			 title
 		</th>
 		<th>
 			 content
 		</th>
 		<th>
 			 featured
 		</th>
 		<th>
 			Editing
 		</th>
 		<th>
 			Trashed
 		</th>
 	</thead>

 	<tbody>

 	@if($posts->count() > 0)
 		@foreach($posts as $post)
 			<tr>
 				<td>
 					{{ $post->title }}
 				</td>
 				<td>
 					{{ $post->content }}
 				</td>
 				<td>
 					  <img src="{{ $post->featured }}" alt=" {{ $post->title }} " width="100px" height="100"> 
 				</td>
 				<td>
 					<button class="btn btn-xs btn-success">
 						<a href="{{ route('post.edit', ['id' => $post->id]) }}"> Edit </a>
 					</button>
 				</td>
 				<td>
 					<button class="btn btn-danger">
 						<a href="{{ route('post.delete', ['id' => $post->id]) }}"> Trashed</a>
 					</button>
 				</td>
 			</tr>
 		@endforeach
 	@else
     <tr>
         <th colspan="5" class="text-center"> No Published Post </th>
 	 </tr>
 	@endif
    	</tbody>
  </div>
</div>



@stop