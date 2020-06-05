<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBook;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $books = Book::all();

        // dd($books);

        $search = $request->input('search');

        // $books = DB::table('books')
        // ->select('id', 'title', 'author','created_at')
        // ->orderBy('id', 'desc')
        // ->paginate(5);

        $query = DB::table('books');

        if($search !== null){

            $search_split = mb_convert_kana($search, 's');

            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);

            foreach($search_split2 as $value)
            {
                $query->where('author','like','%'.$value.'%');
            }
        };




        $query ->select('id', 'title', 'author','created_at');
        $query->orderBy('id', 'desc');
        $books = $query->paginate(6);




        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view("book.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBook $request)
    {
        $book = new Book;


        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->comment = $request->input('comment');

        $book->save();

        return redirect('book/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = Book::find($id);

        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->comment = $request->input('comment');

        $book->save();

        return redirect('book/index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = Book::find($id);
        $book->delete();

        return redirect('book/index');
    }

};

