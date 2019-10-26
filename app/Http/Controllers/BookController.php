<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Model\BookGenres;
use App\Model\BookLanguage;
use App\Model\Book;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Psy\Util\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }


    public function create()
    {
        $genres = BookGenres::all();
        return view('Book.create', compact('genres'));
    }


    public function store(StoreBookRequest $request)
    {
        $lang = BookLanguage::where('name', $request->language)->first();
        $book = Book::create(['name' => $request->name,
            'description' => $request->description,
            'page_extent' => $request->page_extent,
            'data_release' => $request->data_release,
            'pegi' => $request->pegi,
            'tags' => $request->tags,
            'ISBN' => $request->ISBN,
            'book_language_id' => $lang->id,

        ]);

        $book->update([
            'image' => $request->img->store('image/book', 'public'),
        ]);
        $image = Image::make(public_path('storage/' . $book->image))->resize(300, 400);
        $image->save();
        //$book->genres
        return redirect()->route('MainPage')->with('success', 'Success create book thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

        $genres = $book->genres;

        foreach ($genres as $genre) {
            $genreParent[] = $genre->genreParent;
        }
        $genreParent = $genre->genreParent;
        $listings = $book->listings()->get();
        return view('Book.show', compact('book', 'listings', 'genreParent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function genreSearch(BookGenres $genre)
    {
        $books = $genre->book;
        return view('Book.search', compact('books'));
    }

}
