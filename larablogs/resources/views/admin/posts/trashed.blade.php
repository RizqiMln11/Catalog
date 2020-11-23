@extends('layouts.app')


@section('content')

<div class="card">

	<div class="card-header">
		Trashed Post
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
 			Restore
 		</th>
 		 <th>
 			Destroy
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
	 					<button class="btn btn-xs btn-info">
	 						<a href="{{ route('post.restore', ['id' => $post->id]) }}"> Restore</a>
	 					</button>
	 				</td>
	 				<td>
	 					<button class="btn btn-danger">
	 						<a href="{{ route('post.kill', ['id' => $post->id]) }}"> Delete</a>
	 					</button>
	 				</td>
	 			</tr>
 		  @endforeach

 		@else
 			<tr>
 				<th colspan="5" class="text-center"> No Trashed Post </th>
 			</tr>
 		@endif

 	</tbody>
 </table>

   </div>
</div>



@stop