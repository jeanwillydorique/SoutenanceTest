<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book as Book;
use App\Author as Author;
use App\Creator as Creator;
use App\Category as Category;
use App\Classe as Classe;
use App\BookCategory as BookCategory;
use App\BookCreator as BookCreator;
use App\AuthorBook as AuthorBook;

class BookController extends Controller
{
    //
    public function readOne($id){

        $user = Auth::user();
        $book = Book::where('id','LIKE', $id)->get();

            
        return view('/home', [
            'page' => 'oneBook',
            'role' => $user->role->name,
            'book' => $book,
            'user' => $user,
            ] );

    }
    public function updateOne(Request $request)
    {   
        if($request->imgDefault) {
            $img = "https://www.unicadeaux.com/wp-content/uploads/2017/05/noimage.jpg";
        } else {
            $img = $request->img;
        }

        $book = Book::find($request->id); ; 

        $book->title = $request->title;
        $book->stock =$request->stock;
        $book->classe_id = $request->classe;
        $book->description= $request->description;
        $book->date = $request->date;
        $book->page = $request->pages;
        $book->img = $img;
        $book->save();

        //dd($request->author);

        foreach ( $request->author as $key => $value) {

            $query = Author::where('name','LIKE','%'.$value.'%')->get();
            foreach ($query as $key => $author) {  
                $search = Authorbook::where([
                    ['author_id','LIKE',$author->id],
                    ['book_id','LIKE',$request->id],])->get();
                        if ($search == "[]") {
                            $Authorbook = new Authorbook ; 
                            $Authorbook->book_id = $request->id;
                            $Authorbook->author_id = $author->id;
                            $Authorbook->save();
                        }
                    }
            }

        foreach ( $request->category as $key => $value) {
            $query = Category::where('name','LIKE','%'.$value.'%')->get();
            foreach ($query as $key => $category) {
                $search = Authorbook::where([
                    ['category_id','LIKE',$category->id],
                    ['book_id','LIKE',$request->id],])->get();
                        if ($search == "[]") {
                            $bookCategory = new BookCategory ; 
                            $bookCategory->book_id = $request->id;
                            $bookCategory->category_id = $category->id;
                            $bookCategory->save();
                        }
                }
            }

        foreach ( $request->creator as $key => $value) {
            $query = Creator::where('name','LIKE','%'.$value.'%')->get();
            foreach ($query as $key => $creator) {
                $search = Authorbook::where([
                    ['creator_id','LIKE',$creator->id],
                    ['book_id','LIKE',$request->id],])->get();
                        if ($search == "[]") {
                            $bookCreator = new BookCreator ; 
                            $bookCreator->book_id = $request->id;
                            $bookCreator->creator_id = $creator->id;
                            $bookCreator->save();
                        }
            }
        }
        
        return redirect('/home');
    }
    public function deleteOne(Request $request)
    {
        
    }

    public function deleteAuthorBook(Request $request){
        
        

        $Authorbook = Authorbook::where([
            ['author_id','LIKE',$request->author_id],
            ['book_id','LIKE',$request->book_id]], true)->delete();

        return redirect('/updateBook/' . $request->book_id . '/' );
    }

    public function createOne(Request $request)
    {
        // $test = BookCategory::all();
        // New book save 

        // dd($request);


        if($request->imgDefault) {
            $img = "https://www.unicadeaux.com/wp-content/uploads/2017/05/noimage.jpg";
        } else {
            $img = $request->img;
        }
        

        $book = new Book ; 

        $book->title = $request->title;
        $book->stock =$request->stock;
        $book->classe_id = $request->classe;
        $book->description= $request->description;
        $book->date = $request->date;
        $book->page = $request->pages;
        $book->img = $img;
        $book->save();

        $insertedId = $book->id;

        foreach ( $request->author as $key => $value) {
            $query = Author::where('name','LIKE','%'.$value.'%')->get();
            foreach ($query as $key => $author) {
                $Authorbook = new Authorbook ; 
                $Authorbook->book_id = $insertedId;
                $Authorbook->author_id = $author->id;
                $Authorbook->save();
            }
        }
        foreach ( $request->category as $key => $value) {
            $query = Category::where('name','LIKE','%'.$value.'%')->get();
            foreach ($query as $key => $category) {
                $bookCategory = new BookCategory ; 
                $bookCategory->book_id = $insertedId;
                $bookCategory->category_id = $category->id;
                $bookCategory->save();
            }
        }
        foreach ( $request->creator as $key => $value) {
            $query = Creator::where('name','LIKE','%'.$value.'%')->get();
            foreach ($query as $key => $creator) {
                $bookCreator = new BookCreator ; 
                $bookCreator->book_id = $insertedId;
                $bookCreator->creator_id = $creator->id;
                $bookCreator->save();
            }
        }
        
        return redirect('/home');
        

    }
}
