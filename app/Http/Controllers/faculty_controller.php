<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FacultyModel;

class faculty_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = FacultyModel::all();
        return view('viewfaculty',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
    {
        $getFname = request('fname');
        $faculties = FacultyModel::query()->where('fname','LIKE',"%{$getFname}%")->get();
        return view('viewfaculty',compact('faculties'));
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request('fname');
        $getdesignation=request('fdes');
        $getcollege=request('fcllg');
        $getcontact=request('fcontact');

        echo $getname;
        echo $getdesignation;
        echo $getcollege;
        echo $getcontact;

        $faculty=new FacultyModel();
        $faculty->fname=$getname;
        $faculty->fdes=$getdesignation;
        $faculty->fcllg=$getcollege;
        $faculty->fcontact=$getcontact;

        $faculty->save();
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
        $faculties = FacultyModel::find($id);
        return view('FacultyEdit',compact('faculties'));
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
        $faculty = FacultyModel::find($id);
        
        $getname=request('fname');
        $getdesignation=request('fdes');
        $getcollege=request('fcllg');
        $getcontact=request('fcontact');

        echo $getname;
        echo $getdesignation;
        echo $getcollege;
        echo $getcontact;

        $faculty->fname=$getname;
        $faculty->fdes=$getdesignation;
        $faculty->fcllg=$getcollege;
        $faculty->fcontact=$getcontact;

        $faculty->save();
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
