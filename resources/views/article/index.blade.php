<x-layout>

    <div class="container-fluid p-5 text-center text-white" id="backimagehome">
        <div class="row justify-content-center">
            <h1 class="dipslay-1" id="titolohome">
                THE DAILY BUGGLE

            </h1>

                <div class="container my-5">
                    <div class="row justify-content-around">
                        
                        @foreach($articles as $article)
                        <x-card :article=$article>

                            <p class="small fst-italic text-capitalize">
                                @foreach($article->tags as $tag)
                                    #{{$tag->name}}
                                @endforeach
                                </p>

                                @if($article->category)
                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
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
            </div>


            {{-- <div class="container-fluid p-5 bg-danger text-center text-white"> --}}
                {{-- <div class="row justify-content-center"> --}}


                </div>

            </div>

</x-layout>