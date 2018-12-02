@extends('layouts.app')
@section('content')


<div class="banner">
  <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
  <div class="container fill_height">
    <div class="row fill_height">
      <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
      <div class="col-lg-8 offset-lg-1.5 fill_height">
        <div class="banner_content">
          <h1 class="banner_text">Genuine Secondhand and brand new smartphones Available</h1>
        </div>
        <div class="row text-center mt-5" id="all_posts">
          @foreach($posts as $key=>$post)
            <div class="col-lg-3 col-md-6 mb-4 mt-5">
              <div class="card">
                <img class="card-img-top" style="height:169px" src="images/products/{{$post->image}}" alt="">
                <div class="card-body">
                  <h4 class="card-title">{{$post->title}}</h4>
                  <!-- <p class="card-text">{{$post->description}}</p> -->
                  <p class="card-text">Nrs.{{$post->price}}</p>
                </div>
                <div class="card-footer">
                  <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Find Out More!</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="row text-center mt-5" id="search_posts" style="display:none">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mt-4">
  {{$posts->links()}}
</div>

  @endsection
@section('scripts')
  <script>
    $('#search_items').on('keyup',function(){
      let value=$('#search_items').val();
      if (value.length==0) {
        $('#all_posts').show();
        $('#search_posts').hide();
      }else if(value.length>2){
        $.ajax({
          url: "posts/search_posts/"+value
        }).done(function(response) {
          let post=response.post;
          if (post.length>0) {
            $('#all_posts').hide();
            $('#search_posts').show();
            $('#search_posts').empty();
            $.each(post,function(i,v){
              $('#search_posts').append(`
                <div class="col-lg-3 col-md-6 mb-4 mt-5">
                  <div class="card">
                    <img class="card-img-top" style="height:169px" src="images/products/`+v.image+`" alt="">
                    <div class="card-body">
                      <h4 class="card-title">`+v.title+`</h4>
                      <p class="card-text">Nrs.`+v.price+`</p>
                    </div>
                    <div class="card-footer">
                      <a href="`+"/posts/"+v.id+`" class="btn btn-primary">Find Out More!</a>
                    </div>
                  </div>
                </div>
                `);
            });
          }else if(post.length==0){
            $('#all_posts').hide();
            $('#search_posts').show();
            $('#search_posts').empty();
              $('#search_posts').append(`
                    <div class="col-lg-3 col-md-6 mb-4 mt-5">
                      <span>Sorry No Items Found</span>
                    </div>
                `);
          }
        });
      }
    });
  </script>
@endsection