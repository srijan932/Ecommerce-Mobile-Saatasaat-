@extends('layouts.app')
@section('content')

	@if($errors->all())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</div>
	@endif
	@if(session()->has('message'))
		<div class="alert alert-success">
			{{session()->get('message')}}
		</div>
	@endif
<form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('put')
	<div class="container">
		<h1 class="mt-5">Update the Post</h1>
        <hr>
			<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" value='{{$post->title}}'>

			<label for="description">Description</label>
				<textarea name="description" id="description" cols="50" rows="10" class="form-control">{{$post->description}}</textarea>

			<label class="mt-2" for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control" value='{{$post->image}}'>

			<label class="mt-2" for="image">Image of IMEI Code of Box</label>
				<input type="file" name="image_box" id="image_box" class="form-control" value='{{$post->image_box}}'>

			<label class="mt-2" for="image">Image of ScreenShot of IMEI Code on Mobile</label>
				<input type="file" name="image_mobile" id="image_mobile" class="form-control" value='{{$post->image_mobile}}'>

			<label for="price">Price</label>
				<input type="number" name="price" id="price" class="form-control" value='{{$post->price}}'>
				<button type="submit" class="btn btn--outline-info">Update the Post</button>
	</div>
</form>
@endsection


 @section('scripts')
<script>
	$('#search').remove();
</script>
 @endsection