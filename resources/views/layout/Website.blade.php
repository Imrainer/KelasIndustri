@extends('layout.aplikasi')
@section('isi')
@extends('layout.footer')
@section('fot')
@extends('layout.Navbar')
@section('container')
<h1 class="text-center mt-3 "> {{__('Blog.Welcome')}} </h1>
<h6 class="text-center pb-3 "> {{__('Blog.Layout')}} </h6>

<div class="col-md-12 ">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col"> 
      {{-- ($posts as $post) --}}
      <div class="card  mx-5">
        <img src="images/Tokyo.jpg }}" class="card-img-top p-3" alt="">
        <div class="card-body">
          
          <h5 class="card-title"> {{__('Blog.title1')}}</h5>  
          <p class="text-muted fst-italic">{{__('Blog.Author')}} Jhon Doe<br> {{__('Blog.Uploaded')}}16/12/22 </p> 
        
          <a href="/website/blog/post/{slug}" class="col-md-5 btn btn-dark btn-gradient">{{__('Blog.Read More')}}</a>
        </div>
      </div>
    </div>

    <div class="col-md-12 ">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col"> 
          {{-- ($posts as $post) --}}
          <div class="card  mx-5">
            <img src="/images/London,jpg }}" class="card-img-top p-3" alt="">
            <div class="card-body">
              
              <h5 class="card-title"> {{__('Blog.title2')}}</h5>  
              <p class="text-muted fst-italic">{{__('Blog.Author')}} Arthur Fleck<br> {{__('Blog.Uploaded')}}16/12/22 </p> 
            
              <a href="/website/blog/post/{slug}" class="col-md-5 btn btn-dark btn-gradient">{{__('Blog.Read More')}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
 
@endsection
@endsection
@endsection