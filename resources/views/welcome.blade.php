<x-layout>

    <x-header headertitle='TUTTI I POST DEL DAILY BUGLE'></x-header>

    <div class="container-fluid p-5 text-center text-white" id=background-giornal>
        <div class="row justify-content-center">
            
            
            <a class="btn btn-primary nav-link text-white" href="{{route('article.create')}}">Inserisci un Articolo</a>


            @if(session('message'))
                <div class="alert alert-success text-center">
                    {{session('message')}}

                </div>
                @endif

                <div class="container my-5">
                    <div class="row justify-content-around">
                        @foreach($articles as $article)
                            <x-card :article=$article>

                                @if($article->category)
                                    <a href="{{route('article.byCategory', ['category'=> $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                                @else 
                                <p class="small text-muted fst-italic text-capitalize">
                                    Non categorizzato
                                </p>
                                @endif
                                                  
                            </x-card>
                        @endforeach

                </div>

                

        </div>
                    
    </div>
    <div class="container p-5">
      <div class="row justify-content-center">
        <div class="col-8">
          <div id="carouselExampleDark" class="carousel carousel-white slide my-5 custom-carosel" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{Storage::url("media/Stan-Lee.jpeg")}}" class="card-img-top" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 class="text-light bg-dark">LE GRANDI ULTIME SCOPERTE DI STAN-LEE</h5>
                  <p class="text-light bg-dark">Nonostante la scomparsa ci sono delle super novità</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{Storage::url("media/direttore.jpg")}}" class="card-img-top" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 class="text-light bg-dark">IL NOSTRO ADMIN SI RACCONTA</h5>
                  <p class="text-light bg-dark">Curiosità sul nostro fondatore del Daily Post Bugle</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{Storage::url("media/peter.jpg")}}" class="card-img-top" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 class="text-light bg-dark">J.J. IL RE DEI GIORNALISTI</h5>
                  <p class="text-light bg-dark">Tutti i segreti di J.J. con la moglie - foto esclusive di Peter Parker</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

      </div>

    </div>
    

</x-layout>