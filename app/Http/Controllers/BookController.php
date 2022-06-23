<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show()
    {
        $booklist = Book::all();
        return view('home',['booklist'=>$booklist]);
    }

    public function search()
    {
        $search=$_GET['query'];
        $booklist= Book::where('name','LIKE','%'.$search.'%')
                            ->where('isReserved','=','false')->get();
        return view('booksearch',['booklist'=>$booklist]);
    }

    public function reserve($id)
    { 
        Book::where('id','=',$id)->update(['isReserved' => 'true']);
        return redirect('home')->with('Knyga rezervuota');
    }

    public function like()
    {}



    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'summary' => 'required',
            'ISBN' => 'required',
            'image' => 'required',
            'pageCount' => 'required',
            'category' => 'required',
            'isReserved' => 'required',
        ]);

        Book::create($request->all());
       
        return redirect('/home')
                        ->with('Knyga prideta');
    }
    public function edit(Book $book)
    {
        return view('edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'summary' => 'required',
            'ISBN' => 'required',
            'image' => 'required',
            'pageCount' => 'required',
            'category' => 'required',
            'isReserved' => 'required',
        ]);
      
        $book->update($request->all());
      
        return redirect('home')->with('Knygos informacija pakeista');
    }
}
