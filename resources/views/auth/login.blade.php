<x-layout header="Accedi">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

              <h1 class="display-1">
                Accedi

              </h1>
              
              
              {{-- per vedere errori in homepage--}}
              
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              {{-- per vedere errori in homepage --}}
              
              <form class="p-5 shadow" method="POST" action="{{ route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">indirizzo email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
    
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
    
                    <div class="mb-3 form-check">
                      <input type="checkbox" name="remember" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Ricordami</label>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    <p class="small mt-2">Non sei registrato?<a href="{{ route('register')}}">Clicca Qui</a></p>
                  </form>
    
            </div>
        </div>
    </div>
    
    
    </x-layout>