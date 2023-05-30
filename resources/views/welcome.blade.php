<x-layout>

    <x-header headertitle='TUTTI I POST DEL DAILY BUGLE'></x-header>

    <div class="container-fluid p-5 bg-danger text-center text-white">
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


</x-layout>