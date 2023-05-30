<nav class="navbar navbar-expand-lg bg-danger p-3">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('homepage')}}"> 
        <img src="{{Storage::url('media/Logo.jpg')}}" alt="" id='logo'>
      
        THE DAILY BUGLE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('article.create')}}">Inserisci un articolo</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bentornat* {{ Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">

              @if(Auth::user()->is_admin)
                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                @endif

                @if(Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
                @endif
              

              {{-- @foreach($categories as $category) --}}
              {{-- <li>{{$category->name}}</li> --}}
              {{-- @endforeach --}}
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
              <form id="form-logout" method="POST" action="{{ route('logout')}}" class="d-none">@csrf</form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown text-white">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto* Ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{ route('register')}}">Registrati</a></li>
            </ul>
          </li>
          @endauth
          <li class="nav-item mb-2"><a href="{{route('careers')}}" class="nav-link text-white">Lavora con Noi</a></li>
        </ul>
        
      </li>
    </ul>
    <form class="d-flex" method="GET" action="{{route('article.search')}}">
      <input class="form-control me-2" type="search" placeholder="Chiedi a J.J." aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Cerca</button>
    </form>



      </div>
    </div>
  </nav>