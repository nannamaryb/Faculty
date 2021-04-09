<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudentModel;

class student_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students = StudentModel::all();
       return view('viewstudent',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $getRollno = request('srollno');
        $students = StudentModel::query()->where('srollno','LIKE',"%{$getRollno}%")->get();
        return view('viewstudent',compact('students'));
    }


    public function create()
    {
       return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request('sname');
        $getrollno=request('srollno');
        $getadmissionno=request('sadmission');
        $getcollege=request('scllg');

        echo $getname;
        echo $getrollno;
        echo $getadmissionno;
        echo $getcollege;

        $student = new StudentModel();

        $student->sname=$getname;
        $student->srollno=$getrollno;
        $student->sadmission=$getadmissionno;
        $student->scllg=$getcollege;

        $student->save();
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
