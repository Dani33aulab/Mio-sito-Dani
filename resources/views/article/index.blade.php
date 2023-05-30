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