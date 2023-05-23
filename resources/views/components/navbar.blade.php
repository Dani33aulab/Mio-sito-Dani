<nav class="navbar navbar-expand-lg bg-red p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">THE DAILY BUGLE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bentornat* {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">

              {{-- @foreach($categories as $category) --}}
              {{-- <li>{{$category->name}}</li> --}}
              {{-- @endforeach --}}
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" anclick="event.preventDefault(); document.querySelector ('#form-logout').submit();">Logout</a></li>
              <form id="form-logout" method="POST" action="{{ route('logout')}}" class="d-none">@csrf</form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto* Ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{ route('register')}}">Registrati</a></li>
            </ul>
          </li>
          @endauth

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>