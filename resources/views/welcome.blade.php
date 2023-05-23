<x-layout>

    <x-header headertitle='MY DAILY BUGLE'></x-header>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="dipslay-1">
                MY DAILY BUGLE

            </h1>

            @if(session('message'))
                <div class="alert alert-success text-center">
                    {{session('message')}}

                </div>
                @endif


        </div>

    </div>


</x-layout>