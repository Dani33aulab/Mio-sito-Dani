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

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richieste per ruolo amministratore</h2>
                        <x-requests-table :roleRequests="$adminRequests" role="amministratore"></x-requests-table>

                    </div>

                </div>

            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richieste per ruolo revisore</h2>
                        <x-requests-table :roleRequests="$adminRequests" role="revisore"></x-requests-table>

                    </div>

                </div>

            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richieste per ruolo redattore</h2>
                        <x-requests-table :roleRequests="$adminRequests" role="redattore"></x-requests-table>

                    </div>

                </div>

            </div>
            

</x-layout>