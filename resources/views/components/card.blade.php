<div class="card" style="width: 18rem;">
 <img src="{{Storage::url($article->image)}}" class="card-img-top card-img-custom" alt="..."> 
    <div class="card-body">
        <h5 class="card-title text-black"> {{$article->title}}</h5>
        <p class="card-text text-black"> {{$article->subtitle}}</p>
        <p class="card-text small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            Scritto il {{$article->created_at->format('d/m/y')}} da {{$article->user->name}}

        </li>
        <li class="list-group-item">
        <a href="{{route('article.byCategory', ['category'=> $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>

        </li>
        
    </ul>
    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
       
        <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
        <a href="{{route('article.byUser', ['User'=> $article->User->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->User->name}}</a>

    </div>

</div>


