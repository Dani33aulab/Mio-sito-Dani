<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function byUser(User $User){

        $articles = $User->articles->sortByDesc('created_at');
        return view('article.by-User', compact('User', 'articles'));
    }





    public function byCategory(Category $category){

        $articles = $category->articles->sortByDesc('created_at');
        return view('article.by-category', compact('category', 'articles'));
    }



    
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function articleSearch(Request $request){

        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('article.search-index', compact('articles', 'query'));
    }

    public function editTag(Request $request, Tag $tag){

        $request->validate([

            'name' => 'required|unique:tags',
        ]);

        $tag->update([

            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente aggiornato il tag');
    }


        public function deleteTag(Tag $tag){

            foreach($tag->articles as $article){

                $article->tags()->detach($tag);
            }

            $tag->delete();

            return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente eliminato il tag');
        }

    
        public function editCategory(Request $request, Category $category){

            $request->validate([

                'name' => 'required|unique:categories',
            ]);

            $category->update([

                'name' => strtolower($request->name),

            ]);

            return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente aggiornato la categoria');


        }

        public function deleteCategory(Category $category){

            $category->delete();

            return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente eliminato la categoria');
        }

        


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         
        // $categories=Category::all();

         return view('article.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|unique:articles|min:5',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category'=> 'required',


        ]);

        Article::create([

            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'image'=> $request->file('image')->store('public/images'),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,


        ]);

        $tags = explode(',', $request->tags);

        foreach($tags as $tag){
            
            $newTag = Tag::updateOrCreate([

                'name' => $tag,
            ]);

            $article->tags()->attach($newTag);

        }

        return redirect(route('homepage'))->with('message', 'Articolo creato J.J. Approva!!');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
