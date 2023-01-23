


@extends('layout.aplikasi')
@section('isi')
@extends('layout.footer')
@section('fot')
@extends('layout.Navbar')
@section('container')



<div class="container p-5 col-md-9">
    <h3 class=" mt-2 fw-bold text-md-start">{{__('Blog.title1')}} </h3>
    <div class="mt-2">
        <div class="row">
          <div class="col-md-2 text-muted">
           {{__('Blog.Author')}}
          </div>
          <div class="col-md-3 text-muted">
         {{__('Blog.Uploaded')}}
          </div>
          {{-- <div class="col-md-2 text-muted">
          Published In:
          </div> --}}
        </div>
        <div class=" text-md-start">
            <div class="row">
              <div class="col-md-2 ">
         
              </div>
              <div class="col-md-3 ">
               
              </div>
              <div class="col-md-2 ">
           
              </div>
            </div>
            
      </div>
        <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
          <img src="/images/Tokyo.jpg"  class="img-fluid p-5 w-100px" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>

        <p>{{__('Blog.isiberita1')}}
        </p>

        <a href = "/website/blog" class="col-md-2 btn btn-dark btn-gradient">Back to Posts</a>
    </div>
</div>


@endsection
@endsection
@endsection