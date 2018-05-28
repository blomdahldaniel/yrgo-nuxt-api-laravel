<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return auth()->user()->books->map(function ($b) {
            return $b->only(
                'id',
                'title',
                'author',
                'image_path',
                'started_at',
                'finished_at',
                'rating'
            );
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
        ]);


        if(!$request->image_path) {
            $request->request->add(['image_path' => 'http://via.placeholder.com/200x300/eeeeee/666666?text=' . $request->title]);
        }

        return auth()->user()->books()->create($request->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        if ($book->user_id != auth()->user()->id) {
            return response(401);
        }
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'user_id' =>'required|in:'.auth()->user()->id,
        ]);


        if(!$request->image_path) {
            $request->request->add(['image_path' => 'http://via.placeholder.com/200x300/eeeeee/666666?text=' . $request->title]);
        }

        $book->update($request->toArray());

        return $book->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if ($book->user_id != auth()->user()->id) {
            return response(422, 'That is not your book!');
        }

        $book->delete();

        return 'deleted';
    }
}
