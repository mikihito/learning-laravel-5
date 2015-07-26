<?php namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{



    public function index()
    {
    	$articles = Article::latest('published_at')-> published() -> get();
    			 // Article::order_by('published_at','desc')->get();

   // 	return view('art.index',compact('articles'));
    	return view('art.index',compact('articles'));
    }

    public function show($id)
    {
    	
    	$article = Article::findOrFail($id);

     //   dd($article->published_at);

    	return view('art.show',compact('article'));
    }

    public function create()
    {

		return view('art.create');    	
    }

    public function store(Requests\ArticleRequest $request)
    {
    	$input = Request::all();
    	$input['published_at'] = Carbon::now();

    	Article::create(Request::all());

//    	$article = new Article;
//    	$article ->title = $input['title'];

    	return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('art.edit',compact('article'));
    }

    public function update($id,Requests\ArticleRequest $request)
    {

        $article = Article::findOrFail($id);
        $article->update($request->all());
       
        return redirect('articles');
    }


}
