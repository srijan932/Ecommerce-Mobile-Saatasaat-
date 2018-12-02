@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif
                   
            </div>
        </div>
    </div>
</div>
  <!-- <div class="banner">
        <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
                <div class="col-lg-5 offset-lg-1 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">Genuine Secondhand and brand new smartphones Available</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection


 @section('scripts')
<script>
    $('#search').remove();
</script>
 @endsection
