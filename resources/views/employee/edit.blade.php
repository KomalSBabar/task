@extends('employee.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>edit emp</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-success" href="{{ route('employees.index') }}" > employee list</a>
        </div>
    </div>
</div>



<form action="{{route('employees.update',$edit_value->id)}}" method="POST">

@csrf
@method('PUT')
<div class="row">
    
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name:</strong>
            <input type="text" name="first_name" class="form-control=" value="{{ $edit_value->first_name }}"  placeholder="fname">
        </div>
    </div>

    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>last Name:</strong>
            <input type="text" name="last_name" class="form-control=" value="{{ $edit_value->last_name }}"  placeholder="lname">
        </div>
    </div>

    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>company :</strong>
            <input type="text" name="company_id" class="form-control=" value="{{ $edit_value->company_id }}"  placeholder="company">
        </div>
    </div>

    <!-- company email -->
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            <input type="email" name="email" class="form-control=" value="{{ $edit_value->email }}"   placeholder="email">
        </div>
    </div>
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>phone:</strong>
            <input type="text" name="phone" class="form-control=" value="{{ $edit_value->phone }}"   placeholder="phone">
        </div>
    </div>
    


<!-- button -->
    <div class="col-xs-12  col-sm-12 col-md-12">
       <input type="submit" class="btn btn-primary"  value="update" >

       </button>
    </div>
</div>

</form>

@endsection