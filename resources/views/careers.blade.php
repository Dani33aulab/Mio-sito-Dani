<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white" id=background-giornal>
        <div class="row justify-content-center">
            <h1 class="display-1"id=giornal>
                Fatti Assumere da J.J. per 100$
            </h1>
        </div>
    </div>

    <div class="container my-5 bg-white">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <img src="{{Storage::url("media/peter.jpg")}}">
            <div class="col-12 col-md-6 my-5">
                <h2 class="text-white bg-danger text-center">Lavora come Amministratore</h2>
                <p class="text-white bg-dark text-center">Cosa farai: ti occuperai della gestione degli articoli, pubblicazioni...ecc</p>
                <h2 class="text-white bg-danger text-center">Lavora come Revisore</h2>
                <p class="text-white bg-dark text-center">Cosa farai: ti occuperai di approvvare o rileggere eventuali articoli sospetti.</p>
                <h2 class="text-white bg-danger text-center">Lavora come Redattore</h2>
                <p class="text-white bg-dark text-center">Aiuterai altri colleghi redattori in altre mansioni specifiche che ti saranno richieste</p>

            </div>
        </div>
    </div>
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

            <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                @csrf

                <div class="mb-3">

                    <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">

                        <option value=""> Scegli qui</option>
                        <option value="admin"> Amministratore</option>
                        <option value="revisor"> Revisore</option>
                        <option value="writer"> Redattore</option>

                </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Parlaci di te</label>
                    <textarea type="message" name="message" id="message" cols="30" rows="7" placeholder="inserisci nota" class="form-control">{{old('message')}}</textarea>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary text-white">Invia a J.J. la Tua Candidatura</button>


                </div>



            </form>





</x-layout>