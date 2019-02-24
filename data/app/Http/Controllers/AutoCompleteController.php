<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author as Author;
use App\Creator as Creator;
use App\Category as Category;


class AutoCompleteController extends Controller {
    
    // public function index(){
    //     return view('autocomplete.index');
    // }
    public function Author(Request $request) {


        $query = $request->get('term','');
        
        $authors=Author::where('name','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($authors as $author) {
                $data[]=array('value'=>$author->name,'id'=>$author->id);
        }

        // dd($data);
    
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

    public function Category(Request $request) {
        $query = $request->get('term','');
        
        $categories=Category::where('name','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($categories as $category) {
                $data[]=array('value'=>$category->name,'id'=>$category->id);
        }

        // dd($data);
    
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

    public function Creator(Request $request) {
        $query = $request->get('term','');
        
        $creators=Creator::where('name','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($creators as $creator) {
                $data[]=array('value'=>$creator->name,'id'=>$creator->id);
        }

        // dd($data);
    
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
    
}