<x-layout>
   <div class="container-fluid p-5 bg-info text-center text-red">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Inserisci Un Articolo

            </h1>


        </div>

   </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        
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
                        
                        <form action="{{ route('article.store')}}" method="POST" class="p-5 shadow" enctype="multipart/form-data">

                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label"> Titolo del Post</label> 
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title')}}">
                            </div>
        
                            <div class="mb-3">
                                <label for="subtitle" class="form-label"> Sottotitolo</label> 
                                <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle')}}">
                            </div>
        
                            <div class="mb-3">
                                <label for="image" class="form-label"> Immagine</label> 
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            
                            
                            <div class="mb-3">
                                <label for="category" class="form-label"> Categoria</label> 
                                <select name="category" class="form-control text-capitalize" id="category">
                                    @foreach($categories as $category)

                                    
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label"> Corpo del testo</label> 
                                <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{old('body')}}</textarea>
                            </div>

        
        
                            <div class="mb-2">
                            <button type="submit" class="btn btn-info text-white">Inserisci articolo</button>
                            <a class="btn btn-autline-info" href="{{route('homepage')}}">Torna alla home</a></p>
                            </div>
                        </form>
                        
                        
                 </div>
                        
              </div>
         </div>

</x-layout>