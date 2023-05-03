

@extends('tasks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>index</h2>
        </div>
        <div class="pull-right">
           
            <a  class="btn btn-success" href="{{ route('companies.index') }}" >  companies</a>
            <a  class="btn btn-success" href="{{ route('employees.index') }}" >  employees</a>
           


        </div>
    </div>
</div>

<table class="table table-borderd">
    <tr>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>email</th>
        <th>phone</th>
        <th>company Name</th>
        <!-- <th  width="280px" >Action</th> -->
    </tr>
    @foreach( $data as $key => $d)
    <tr>
        <td>     {{$key + 1}}</td>
        
        <td>{{$d->first_name}}</td>
        <td>{{$d->last_name}}</td>
        <td>{{$d->email}}</td>
        <td>{{$d->phone}}</td>
        <td>{{$d->name}}</td>
       
  
   

</tr>
    
    @endforeach

</table>

<table>

<select name="cities" id="cities">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>

</table>





@endsection