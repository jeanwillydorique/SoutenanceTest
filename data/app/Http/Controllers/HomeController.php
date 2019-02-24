<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User as User;
use App\Role as Role;
use App\Job as Job;
use App\Customer as Customer;
use App\Book as Book;
use App\Game as Game;
use App\Author as Author;
use App\Creator as Creator;
use App\Category as Category;
use App\Classe as Classe;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request) 
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        //$customer = Customer::find(1);
        $books = Book::all();
        
        // foreach ($books as $key => $book) {
        //     foreach ($book->authors as $key => $author) {
        //         dd($author->name);
        //     }
        // }

        $user = Auth::user();
        $users = User::all();
        $roles = Role::all();
        //dd($request);
        // foreach ($users as $key => $user) {
        //     dd($user->role->name);
        // }
        return view('home', [
            'page' => 'homepage',
            'role' => $user->role->name,
            'users' => $users,
            'user' => $user,
            ] );
    }

    public function allusers(){

        $user = Auth::user();
        $users = User::all();


        if ( $user->role->name === "admin" ) {
            
            return view('/home', [
                'page' => 'user',
                'role' => $user->role->name,
                'users' => $users,
                'user' => $user,
                ] );

        } else{ 
            return view('/noacces')
        ;}

    }

    public function allbooks(){

        $user = Auth::user();
        $books = Book::all();

            
        return view('/home', [
            'page' => 'book',
            'role' => $user->role->name,
            'books' => $books,
            'user' => $user,
            ] );

    }

    public function allgames(){

        $user = Auth::user();
        $games = Game::all();

            
        return view('/home', [
            'page' => 'game',
            'role' => $user->role->name,
            'games' => $games,
            'user' => $user,
            ] );

    }

    public function createuser(){


        $generatePassword = str_random(8);
        $user = Auth::user();
        $users = User::all();
        $job = Job::all();

        if ( $user->role->name === "admin" ) {
            
            return view('/home', [
                'page' => 'createuser',
                'role' => $user->role->name,
                'password' => $generatePassword,
                'jobs' => $job,
                'users' => $users,
                'user' => $user,
                ] );

        }

    }

    public function allmessages(){
        return view('inmailbox');
    }

    public function parameters(){
        dd("parameter");
    }

    public function createbook(){


        $generatePassword = str_random(8);
        $user = Auth::user();
        $books = Book::all();
        $creators = Creator::all();
        $authors = Author::all();
        $categories = Category::all();
        $classes = Classe::all();
            
        return view('/home', [
            'page' => 'createbook',
            'role' => $user->role->name,
            'books' => $books,
            'user' => $user,
            'creators' => $creators,
            'authors' => $authors,
            'categories' => $categories,
            'classes' => $classes,
            ] );


    }

    public function updateBook($id){

        $user = Auth::user();
        $book = Book::where('id','LIKE', $id)->get();
        $creators = Creator::all();
        $authors = Author::all();
        $categories = Category::all();
        $classes = Classe::all();

            
        return view('/home', [
            'page' => 'updateBook',
            'role' => $user->role->name,
            'book' => $book,
            'user' => $user,
            'creators' => $creators,
            'authors' => $authors,
            'categories' => $categories,
            'classes' => $classes,
            ] );
    }

    public function allitems(){

        $creators = Creator::all();
        $user = Auth::user();
        $authors = Author::all();
        $categories = Category::all();
        $classes = Classe::all();

        return view('/home', [
            'page' => 'allitems',
            'role' => $user->role->name,
            'user' => $user,
            'creators' => $creators,
            'authors' => $authors,
            'categories' => $categories,
            'classes' => $classes,
            ] );

    }
}
