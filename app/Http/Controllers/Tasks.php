<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;

use Illuminate\Http\Request;

class Tasks extends Controller
{
    public function index()
    {
        $data = Employees::join('companies', 'companies.id' , '=' , 'table_employee.company_id')
        ->get(['table_employee.first_name','table_employee.last_name','table_employee.email','table_employee.phone','companies.name']);


        return view('tasks.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
     
    }
}
