<nav class="navbar navbar-dark navbar-expand-lg bg-danger  ">
    <div class="container-fluid">
      <a class="navbar-brand" href="tes">ROMERO's PIZZA </a>
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
      </div>
    </div>
</nav>

 
    @yield('container')
