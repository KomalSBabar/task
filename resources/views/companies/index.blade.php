

@extends('companies.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>crud oper</h2>
        </div>
        <div class="pull-right">
         
            <a  class="btn btn-success" href="{{ route('tasks.index') }}" >  tasks</a>
            <a  class="btn btn-success" href="{{ route('employees.index') }}" >  employees</a>
            <a  class="btn btn-success" href="{{ route('companies.create') }}" > Create new company</a>
        </div>
    </div>
</div>

<!-- @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif -->

<!-- company table -->
<table class="table table-borderd">

    <tr>
        <th>id</th>
        <th>Name</th>
        <th style="width: 50px; text-align:center;"  >image_logo</th>
        <th>email</th>
        <th>website</th>
        <th  width="280px" >Action</th>
    </tr>
    @foreach( $companies as $key => $company)


   
    <tr>
        <td>{{ $key + 1 }}</td>
        
        <td>{{$company->name}}</td>
        <td><img class="card-img-top" src="{{asset('/'.$company->logo_image)}}" alt="Card image cap"> </td>
     
        <td>{{$company->email}}</td>
        <td>{{$company->website}}</td>
        <td> <form action="{{route('companies.destroy',$company->id) }}" method="POST">
        <a  class="btn btn-info"  href="{{route('companies.show',$company->id)}}">Show</a>
        <a  class="btn btn-info"  href="{{route('companies.edit',$company->id)}}">Edit</a>




    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
    </form> </td>
   
</td>
</tr>
    @endforeach

    






</table>





@endsection