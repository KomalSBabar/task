

@extends('employee.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>index</h2>
        </div>
        <div class="pull-right">
           
            <a  class="btn btn-success" href="{{ route('companies.index') }}" >  companies</a>
            <a  class="btn btn-success" href="{{ route('tasks.index') }}" >  tasks</a>
            <a  class="btn btn-success" href="{{ route('employees.create') }}" > Create new employee</a>

        </div>
    </div>
</div>

<table class="table table-borderd">
    <tr>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>company</th>
        <th>email</th>
        <th>phone</th>
        <th  width="280px" >Action</th>
    </tr>
    @foreach( $employee  as  $emp)
    <tr>
        <td>1</td>
        
        <td>{{$emp->first_name}}</td>
        <td>{{$emp->last_name}}</td>
        <td>{{$emp->company_id}}</td>
        <td>{{$emp->email}}</td>
        <td>{{$emp->phone}}</td>
        <td><form  action="{{route('employees.destroy',$emp->id) }}" method="POST">
        <a  class="btn btn-info"  href="{{route('employees.show',$emp->id)}}">Show</a>
        <a  class="btn btn-info"  href="{{route('employees.edit',$emp->id)}}">Edit</a>




    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
</tr>
        
        
    

    @endforeach

</table>





@endsection