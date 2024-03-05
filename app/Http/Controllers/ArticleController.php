<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticlesRequest;

class ArticleController extends Controller
{


    public function articoli(){
        $articoli = Article::all();
        return view('articoli',compact('articoli'));
    }

    public function articolo($id){
        //$articolo = Article::where('id','=',$id)->first();
        $articolo = Article::findOrFail($id);
        return view('articolo',compact('articolo'));
    }

    public function create(){
        return view('articoli.create');
    }

    public function store(StoreArticlesRequest $request){

        if($request->hasFile('image')){

            if($request->file('image')->isValid()){

                $article = Article::create([
                    'title'=>$request->input('title'),
                    'content'=>$request->input('content'),
                ]);

                $article->image = $request->file('image')->storeAs('public/articles' .$article->id, 'cover.jpg');
                $article->save();


            }else{
                return 'Immagine non valida';
            }
        }else{
            Article::create([
                'title'=>$request->input('title'),
                'content'=>$request->input('content'),
            ]);
        }

        return redirect()->back()->with(['success'=>'Articolo salvato con successo']);

        //$validator = Validator::make($request->all(),
        //[
        //    'title'=>'required|max:50',
        //    'content'=> 'required|max:500'
        //],
        //[
        //    'title.required'=>'il titolo non è corretto',
        //    'title.max'=>'il titolo non è corretto',
        //    'content.required'=>'il contenuto è richiesto',
        //    'content.max'=>'il contenuto è troppo lungo'
        //]
        //);

        //if($validator->fails()){
        //    return redirect()->back()->withErrors($validator)->withInput;
        //}else{
        //    Article::create($request->all());
        //}

        //Article::create([
        //    'title'=>$request->input('title'),
        //    'content'=>$request->input('content')
        //]);

    }
}
