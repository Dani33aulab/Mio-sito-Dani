<x-layout>

    <div class="container-fluid p-5 bg-danger text-center text-white" id="giornal">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato, Revisore

            </h1>

        </div>

    </div>
            @if(session('message'))
                <div class="alert alert-primary text-center">
                    {{session('message')}}

                </div>
            @endif

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Articoli da revisionare</h2>
                        <x-articles-table :articles="$unrevisioneArticles"></x-requests-table>

                    </div>

                </div>

            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Articoli pubblicati</h2>
                        <x-articles-table :articles="$acceptedArticles"></x-requests-table>

                    </div>

                </div>

            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Articoli respinti</h2>
                        <x-articles-table :articles="$rejectedArticles"></x-requests-table>

                    </div>

                </div>

            </div>
            

</x-layout>