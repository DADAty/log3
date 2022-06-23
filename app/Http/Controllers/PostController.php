<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Coment;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index(){
        $post = [
            'tay be',
            'pipi be'
        ];
        return view('articles', compact('post'));
    }
      /* ou
        return view('article')->with('title',$title); 
        
        ou aussi 

         return view('article',[
             'title' => $title,
             'title2' => $title2
         ]);
        */


    
    public function show(){
        /*
        sans bd
        $posts = [
            1 => 'Mon 1er titre',
            2 => 'Mon 2em titre'
        ];
        avec bd
        */
        $posts = Posts::all();
      

        /*$kaka = $posts[$id] ?? 'Pas de titre';*/
  
        return view('article',[
            'kaka' => $posts
        ]);
    }
    public function contact(){
        return view('contact');
    }
    public function rechercheavecid($id){
        $post = Posts::find($id);

        /** utiliser findOrFail 
         * ou aussi pour un condition 
         *   $post = Posts::where('title', '=', 'le titre que vous vouler')->first();
         */
        //$post->update([
           // 'title' => 'Titre edide'
       // ]);

        return view('byid',[
            'kaka' => $post
        ]);
    }
    public function create(){
        return view('form');
    }
    public function store(Request $request){

       /* $post = new Posts();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        dd('Post creer');*/

        /*autre methode */
        Posts::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        dd('Post creer');
    }
}
