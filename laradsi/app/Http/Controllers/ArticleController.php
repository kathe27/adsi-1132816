<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /*Constructor*/
    public function __construct(){
        $this->middleware('auth',['except' => ['listArticles']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['section' => 'article']);
        $articles = Article::all();
        //dd($articles);
        //var_dump($articles);

        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cats = Category::all();
         return view ('articles.create', compact('cats'))->with('cats',$cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
        }

        $art = new Article();
        $art->name = $request->get('name');
        $art->image = 'imgs/' .$file;
        $art->content = $request->get('content');
        $art->category_id = $request->get('category_id');

        if ($art->save()) {
            return redirect('Article')->with('status', 'El articulo <strong>'.$art->name.'</strong> fue adicionado con exito!');
        }
    }
    /* {
       $art = new Article();
        $art->name = $request->get('name');
        $file = $request->file('image');
        $urlfile = $file->getClientOriginalName();
        $art->image = '/images'.$urlfile;
        $request->file('image')->move(base_path().'/public/imgs/', $urlfile);
        $art->content = $request->get('content');
        $art->category_id = $request->get('category_id');
        if ($art->save()) {
            return redirect('Article')->with('status', 'El articulo <strong>'.$art->name.'</strong> fue adicionado con exito!');
        }
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Articles.show')->with('article',Article::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Article::find($id);
        $cats = Category::all();
        return view('Articles.edit')->with('art', $art)->with('cats', $cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $art = Article::find($id);
        $art->name = $request->get('name');

        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $art->image = 'imgs/'.$file;
        }

        $art->content = $request->get('content');
        $art->category_id = $request->get('category_id');

        if ($art->save()) {
            return redirect('Article')->with('status', 'El articulo <strong>'.$art->name.'</strong> fue modificado con exito!');
        }
    }

    /*{
        $art = Article::find($id);
        if($request->hasFile('photo')) {
            $art->name = $request->get('name');
            $art->content = $request->get('content');
            $art->category_id = $request->get('category_id');
            $file = $request->file('image');
            $urlfile = $file->getClientOriginalName();
            $art->image = '/imgs/'.$urlfile;
            $request->file('image')->move(base_path().'/public/imgs/', $urlfile);
            
        }else{
            $art->name = $request->get('name');
            $art->content = $request->get('content');
            $art->category_id = $request->get('category_id');
        }
            
        if ($art->save()) {
             return redirect('Article')->with('status', 'El articulo <strong>'.$art->name.'</strong> fue modificada con exito!');
        }
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('Article')->with('status', 'El articulo fue eliminado con exito!');
    }

    public function listArticles(){
        //$arts = Article::all();
        $arts = Article::orderBy('id', 'desc')->get();
        return view('welcome')->with('arts', $arts);
    }

    public function search(Request $request){

        $query = Article::name($request->get('name'))->orderBy('id','ASC')->get();
        return view('articles.index')->with('articles', $query);
    }

    public function pdf(){
        $articles = Article::all();

        $view =\View::make('articles.pdf', compact('articles'))->render();
        $pdf  =\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista-articulos.pdf');
    }

    public function excel()
{
        \Excel::create('articlesfile', function($excel) {
        $excel->sheet('sheetname', function($sheet) {
        $articles = Article::all();
        $sheet->loadView('articles.excel', array('articles' => $articles));
        });
        })->download('xls');
    }
}