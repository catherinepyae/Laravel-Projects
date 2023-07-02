<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //two modules
    //after writing two modules, need to import this class at web.php
   /* 
   old index function before learning view
    public function index(){
        return "Controller - Article List";
    }

    2nd old index function after testing view but without transferring data part
    public function index(){
        return view('articles/index');//calling index file from view folder
    }
   */
  //passing data from index function
    public function index(){
        $data = [
            ['id' => 1 , 'title' =>  "First Article"],
            ['id' => 2 , 'title' => "Second Article"],
        ];

        return view ('articles/index' , [
            'articles' => $data
        ]);
    }
    public function details(){
        return "Controller - Article detail";
    }
    public function detail($id){
        return "Controller - Article detail $id";
    }
}
