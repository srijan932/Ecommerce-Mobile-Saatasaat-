@extends('admin_layout.layout')
@section('content')
<div class="container mt-5">
	<h1>All Posts</h1>
		@foreach($posts as $post)
			<div class="card mt-4">
				<div class="card-body">
					<h2>
						<a href=/admin/postshows/{{$post->id}}>
							{{$post->title}}
						</a>
					</h2>
				</div>
			</div>
		@endforeach
		<div class="mt-4">
			{{$posts->links()}}
		</div>	
</div>
@endsection