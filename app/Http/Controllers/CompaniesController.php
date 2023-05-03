<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $companies = Companies::all();
       
        return view('companies.index',compact('companies'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $logo = $request->file('logo_image')->getClientOriginalName();

        $request->logo_image->move(public_path(),$logo);

        $data= array();
        $data['name']= $request['name'];
        $data['email']= $request['email'];
        $data['logo_image']= $logo;
        $data['website']= $request['website'];
        companies::create($data);
        return redirect ('companies')->with('created sucess');
       
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $value = Companies::find($id);
       return view('companies.show', compact('value'))->with('ok');

     


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_value = Companies::find($id);
        return view('companies.edit',compact('edit_value'))->with('ok');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $c_logo = Companies::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo_image'=>'required',
            'website' => 'required'
        ]);
        if($request->has('image_url'))
        {
            $logo = $request->file('logo_image')->getClientOriginalName();

            $request->logo_image->move(public_path(),$logo);

            $data= array();
            $data['name']= $request['name'];
            $data['email']= $request['email'];
            $data['logo_image']=$logo;
            $data['website']= $request['website'];
           companies::where('id',$id)->update($data);

        }else{
            $data= array();
            $data['name']= $request['name'];
            $data['email']= $request['email'];
            $data['logo_image']= $request['logo_image'];
            $data['website']= $request['website'];
           companies::where('id',$id)->update($data);
        }

  
        return redirect('companies')->with('success','compoonies updated successfully');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Companies::destroy($id);
       
        return redirect('companies')->with('success','pro deleted succesfuly');
    }
}
