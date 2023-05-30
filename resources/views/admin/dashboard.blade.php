<x-layout>

    <div class="container-fluid p-5 bg-danger text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato, Amministratore

            </h1>

        </div>

    </div>
            @if(session('message'))
                <div class="alert alert-success text-center">
                    {{session('message')}}

                </div>
            @endif

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

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richieste per ruolo amministratore</h2>
                        <x-articles-table :roleRequests="$adminRequests"role="amministratore"></x-requests-table>

                    </div>

                </div>

            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richieste per ruolo revisore</h2>
                        <x-articles-table :roleRequests="$revisorRequests"role="amministratore"></x-requests-table>


                    </div>

                </div>

            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richieste per ruolo redattore</h2>
                        <x-articles-table :roleRequests="$writerRequests"role="redattore"></x-requests-table>


                    </div>

                </div>

            </div>

            <hr>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>I tags della piattaforma</h2>
                        <x-metainfo-table :metaInfos="$tags" metaType="tags" />
                    </div>
                </div>
         </div>

         <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Le categorie della piattaforma</h2>
                    <x-metainfo-table :metaInfos="$categories" metaType="categorie"></x-requests-table>

                </div>

            </div>

        </div>
            

</x-layout>