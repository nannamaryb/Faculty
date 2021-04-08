<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookModel;

class book_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gettitle=request('booktitle');
        $getauthor=request('bookauthor');
        $getdescription=request('bookdes');
        $getdistributer=request('bookdist');
        $getprice=request('bookprice');

        echo $gettitle;
        echo $getauthor;
        echo $getdescription;
        echo $getdistributer;
        echo $getprice;


        $book=new BookModel();

        $book->booktitle=$gettitle;
        $book->bookauthor=$getauthor;
        $book->bookdes=$getdescription;
        $book->bookdist=$getdistributer;
        $book->bookprice=$getprice;

        $book->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
