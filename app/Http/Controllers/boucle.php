<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class boucle extends Controller
{
     public function indexe(){
         $post = [
             'tay be',
             'pipi be'
         ];
         return view('article', compact('post'));
     }
}
