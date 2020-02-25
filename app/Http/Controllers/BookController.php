<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function create()
    {
        return view('eloquent.book');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'book_name' => 'required',
            'book_author' => 'required',
            'book_title' => 'required',
            'category_id' => 'required',
        ],[
            'book_name.required' => 'Book Name must be needed!',
            'book_author.required' => 'Book author must be needed!',
            'book_title.required' => 'Book title must be needed!',
            'category_id.required' => 'Book description must be needed!',
        ]);

        try {

            $value = new Book;
            $value->book_name = $request->book_name;
            $value->book_author = $request->book_author;
            $value->book_title = $request->book_title;
            $value->book_title = $request->category_id;
            $value->save();

            session()->flash('message', 'Successfully created!');
            session()->flash('type', 'success');

            return redirect()->back();

        }catch(Exception $e)
        {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');

            return redirect()->back();
        }
    }

    public function show()
    {
        $book = Book::all();
        return view('eloquent.bookshow', compact('book'));
    }
}
