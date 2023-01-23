@extends('layout.aplikasi')
@section('isi')
{{-- @extends('layout.Navbar')
@section('container') --}}


<nav class="navbar navbar-dark navbar-expand-lg bg-dark  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="tes">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($title === "Home") ? 'active' : ''}}" aria-current="page" href="">{{ __('Blog.Home')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "About") ? 'active' : ''}}" href="tes_About">{{ __('Blog.About Us')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "Blog") ? 'active' : ''}}" href="/website/blog">{{ __('Blog.Blog')}}</a>
        </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ __('Blog.Language')}}
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        @if(app()->getLocale()=="id")
        <a href="{{url('lng/en')}}"class="dropdown-item">English</a></li>
        @endif
        @if(app()->getLocale()=="en")
        <a href="{{url('lng/id')}}" class="dropdown-item">Indonesia</a></li>
        @endif

   
      

      </ul>
    </li>
      </ul>
      
      <a class="btn  btn-floating m-1" data-bs-toggle="modal" data-bs-target="#logout" role="button">
      <i class="fas fa-user-check text-light me-5" href=""></i> </a>
    </div>
  </div>
</nav>


<div class="modal" tabindex="-1" id="logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ARE YOU SURE ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fst-bold">Are you sure want to Logout?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>







<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>

<tr>
</thead>
<tbody>
@foreach ($data_user as $item)
        <tr>
          <td>{{$item->id}}</td> 
          <td>{{$item->username}}</td> 
          <td>{{$item->email}}</td> 
            <td>{{$item->password}}</td> 
            <td> <a href="/data/{{$item->id}}/edit"><button type="button" class="btn btn-warning text-light">Edit</button></a>
            <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button></td>
        </tr>

   
  @endforeach
 </table> 

 {{-- <div class="modal" tabindex="-1" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data User Anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <form action="/login/tabel/{{$item->id}}" method="POST"> 
    @method('put')
               <!-- Username input -->

             @csrf
               <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" class="form-control" name="usernamebaru" placeholder="Masukan Username baru anda"></div> 
                  <!-- Email input -->

            <div class="form-outline mb-4">
            <label class="form-label" for="email">Email address</label>
            <input type="text" id="email" class="form-control" name="emailbaru" placeholder="Masukan Email baru anda"></div>
                             
        
            <!-- Passwordinput -->
            <div class="form-outline mb-4">
            <label class="form-label" for="password">Password </label>
           
             <input type="text" id="password" class="form-control" name="passwordbaru" placeholder="Masukan password baru anda" />
            
            <span class="eye">
            <i class="fa-fa-eye"></i>
            <i class="fa-fa-eye-slash"></i>
            </span>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" value="Save" class=" btn btn-dark ">Save Changes</button></li>
      </div>
    </div>
  </div>
</form>
</div> --}}


 <div class="modal" tabindex="-1" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ARE YOU SURE ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/login/tabel/{{$item->id}}" method="POST">
        <p class="fst-bold">Are you sure want to Delete this User?</p>
        @method('delete')
        @csrf
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Delete" >
      </form>
      </div>
    </div>
  </div>
</div>
 <a href="" class="container"> Logout?</a>
   
@endsection