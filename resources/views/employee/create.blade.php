@extends('employee.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>create employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employees.index') }}">back</a>
        </div>
    </div>
</div>

<form  action="{{ route('employees.store') }}" method="POST">
@csrf
    <div class="row">
       
        <div class="col-xs-12  col-sm-12 col-md-12">
            <div class="form-group">
                <strong>first Name:</strong>
                <input type="text" class="form-control" name="first_name" placeholder="fname">
            </div>
        </div>
        <div class="col-xs-12  col-sm-12 col-md-12">
            <div class="form-group">
                <strong>last Name:</strong>
                <input type="text" class="form-control" name="last_name" placeholder="lname">
            </div>
        </div>
        <div class="col-xs-12  col-sm-12 col-md-12">
            <div class="form-group">
                <strong>company:</strong>
                <input type="text" class="form-control" name="company_id" placeholder="company">
            </div>
        </div>
        
        <div class="col-xs-12  col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
        </div>
      
       
        <div class="col-xs-12  col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" class="form-contro" name="phone" placeholder="phone">
            </div>
        </div>
        <!-- button -->
        <div class="col-xs-12  col-sm-12 col-md-12">
            <input type="submit" class="btn btn-primary" value="submit">


        </div>
    </div>

</form>

@endsection