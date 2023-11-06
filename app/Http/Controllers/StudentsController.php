<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use App\Models\Students;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('students.data')->with([
            'students'=> Students::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        //
        $validate = $request->validated();

        $std = new Students;
        $std->idstudent = $request->txtnim;
        $std->fullname = $request->txtfullname;
        $std->gender = $request->txtgender;
        $std->address = $request->txtaddress;
        $std->emailaddress = $request->txtemail;
        $std->phone = $request->txtphone;
        $std->save();

        return redirect('students')->with('msg','Berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students, $id)
    {
        //
        // echo $id;
        $data = $students->find($id);
        // echo $data->fullname;
        return view('students.edit')->with([
            'data'=> $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students , $id)
    {
        //
        $validate = $request->validated();
        $data = $students->find($id);

        $data->fullname = $request->txtfullname;
        $data->gender = $request->txtgender;
        $data->address = $request->txtaddress;
        $data->emailaddress = $request->txtemail;
        $data->phone = $request->txtphone;
        $data->save();

        return redirect('students')->with('msg','Berhasil terupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students, $id)
    {
        //
        $data = $students->find($id);
        $data->delete();

        return redirect('students')->with('msg','Berhasil terhapus');
    }
}
