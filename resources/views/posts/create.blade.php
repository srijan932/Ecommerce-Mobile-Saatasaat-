@extends('layouts.app')
@section('content')

	@if($errors->all())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</div>
	@endif
<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="container">
		 <h1 class="mt-5">Add a Post</h1>
               <p>Please fill in this form to post a ad.</p>
        <hr>
			<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control">
			<label for="description">Description</label>
				<textarea name="description" id="description" cols="50" rows="10" class="form-control"></textarea>
			
			<label class="mt-2" for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control">

			<label class="mt-2" for="image">Image of IMEI Code of Box</label>
				<input type="file" name="image_box" id="image_box" class="form-control">
			
			<label class="mt-2" for="image">Image of ScreenShot of IMEI Code on Mobile</label>
				<input type="file" name="image_mobile" id="image_mobile" class="form-control">

			<label for="price">Price</label>
				<input type="number" name="price" id="price" class="form-control">
				<button type="submit" class="btn btn--outline-info">Add a Post</button>
		
	</div>
</form>
@endsection


 @section('scripts')
<script>
	$('#search').remove();
</script>
 @endsection