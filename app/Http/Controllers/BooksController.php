<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\BooksResource;
use App\Http\Requests\BooksRequest;
use Illuminate\Support\Facades\Log;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index method being called';
        // $books = Book::all();
        // return $books->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequest $request)
    {
        if ($request->user()->access_type > 1) {
            $faker = \Faker\Factory::create(1);

            $book = Book::create([
                'title' => $request->title
                // 'title' => $faker->title
            ]);

            return new BooksResource($book);
        } else {
            return 'User does not have permission to perform this task';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return new BooksResource($request);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        Log::info($request->input('title'));
       if ($request->user()->access_type > 1) {
           # code...

            $book->update([
                'title' => $request->input('title')
                ]);

            return new BooksResource($book);
        } else {
            return 'User does not have permission to perform this task';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function delete(Book $book)
    {
         if ($request->user()->access_type > 1) {
           # code...

          $book->delete();
        return response(null, 204);
            } else {
                return 'User does not have permission to perform this task';
            }

    }
}
