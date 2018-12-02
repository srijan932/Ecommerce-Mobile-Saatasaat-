<link rel="stylesheet" href="{{asset('css/product_style.css')}}">
<link rel="stylesheet" href="{{asset('css/product_responsive.css')}}">
@extends('admin_layout.layout')
@section('content')
<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected">
						<img src="{{asset('images/products').'/'.$post->image}}" alt="profile Pic" style="width:100%; height: 100%">
					</div>
				</div>
				<!-- Selected Image of Imei_box -->
					<div class="col-lg-5 order-lg-1 order-1">
						<div class="container">
 							 <h2>IMEI Code on Box:</h2>        
 							   <img src="{{asset('images/products/box').'/'.$post->image_box}}" class="img-thumbnail" width="304" height="236"> 
						</div>
						<!-- Selected Image of Imei_mobile -->
						<div class="container">
 							 <h2>IMEI Code on Mobile:</h2>        
 							   <img src="{{asset('images/products/mobile').'/'.$post->image_mobile}}" class="img-thumbnail" width="304" height="236"> 
						</div>
					</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_name">{{$post->title}}</div>
						<div class="posted_by">Seller: {{$post->seller}}</div>
						<div class="contact">Contact No: {{$post->contact}}</div>
						<div class="product_text"><h2>Desriptions:</h2> <p>{{$post->description}}</p></div>
						
						<div>
								<div class="product_price">Nrs.{{$post->price}}</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection