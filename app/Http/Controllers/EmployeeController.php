<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employees::all();
       
        return view('employee.index',compact('employee'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create')->with('ok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Employees::create($request->all());
        return view('employee.index')->with('created sucess');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $value = Employees::find($id);
        return view('employee.show', compact('value'))->with('ok');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_value = Employees::find($id);
        return view('employee.edit',compact('edit_value'))->with('ok');

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

     

        $update = [
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "company_id" =>$request->company_id,
            "email"=>$request->email
            
        ];
        Employees::where('id', $id)->update($update);
        $msg = "User Updated successful! ";
        return redirect('employees')->with('msg', $msg);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employees::destroy($id);
       
        return redirect('employees')->with('success','deleted succesfuly');
    }
}
