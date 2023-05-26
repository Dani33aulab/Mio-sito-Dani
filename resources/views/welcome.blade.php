<x-layout>

    <x-header headertitle='TUTTI I POST DEL DAILY BUGLE'></x-header>

    <div class="container-fluid p-5 bg-danger text-center text-white">
        <div class="row justify-content-center">
            

            @if(session('message'))
                <div class="alert alert-success text-center">
                    {{session('message')}}

                </div>
                @endif

                <div class="container my-5">
                    <div class="row justify-content-around">
                        @foreach($articles as $article)
                            <x-card :article=$article>


                            </x-card>
                    @endforeach
                </div>
        </div>

    </div>


</x-layout>