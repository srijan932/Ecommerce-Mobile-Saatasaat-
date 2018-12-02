@extends('admin_layout.layout')
@section('content')
<div class="container mt-5">
	<h1>All Users</h1>
		@foreach($users as $user)
			<div class="card mt-4">
				<div class="card-body">
					<h2>
						
						<a href="#">
							{{$user->name}}
						</a>
										
					</h2>
				</div>
			</div>
		@endforeach
		<div class="mt-4">
			{{$users->links()}}
		</div>	
</div>
@endsection
