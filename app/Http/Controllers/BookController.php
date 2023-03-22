<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller
{

    //This function returns the home view that lists the books that the query builder found in the database
    public function index(){
        $books = DB::table('books')->paginate(5);
        $categories = DB::table('categories')->get();
        return view('books',compact('books', 'categories'));
    }

    //This function return the view with details of the book that the user choose in the first view
    public function show($id){
        $book = DB::table('books')->find($id);
        return view('idBook', ['book' => $book]);
    }

    //This function returns the view with a form to insert a new book
    public function create(){
        return view('createBook');
    }

    //This method insert the book that the user insert in the previous form
    public function store(Request $request){
        $today = date("d/m/y");
        
        $request->validate(([
            'isbn' => 'required|string|numeric|min:10|max:10',
            'title' => 'required|string',
            'author' => 'required|string',
            'published_date' => 'required|before:'.$today,
            'description' => 'required|string',
            'price' => 'required|decimal:2'
        ]));
        
        DB::table('books')->insert([
            'isbn' => $request->input('isbn'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'published_date' => $request->input('published_date'),
            'description' => $request->input('description'),
            'price' =>  $request->input('price'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect("/");
    }

    //This function recieve an id to find the correct book in the database and show a form with the book info
    public function edit($id){
        $book = DB::table('books')->find($id);
        return view('edit', ['book' => $book]);
    }

    //This function send a put request to update the book info in the database
    public function update(Request $request, $id){
        DB::table('books')
        ->where('id', $id)
        ->update([
            'isbn' => $request->input('isbn'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'published_date' => $request->input('published_date'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);
        return redirect("/");
    }

    //This function send a delete request to delete a 
    public function destroy($id){
        DB::table('books')->where('id', '=', $id)->delete();
        return redirect("/");
    }
    
}
