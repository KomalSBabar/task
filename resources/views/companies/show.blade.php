@extends('companies.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show companies</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-success" href="{{ route('companies.edit',$value->id)}}" ><button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button></a>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <span class="text-primary">{{ $value->name }}</span>
          
        </div>
    </div>
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            <span class="text-primary"> {{ $value->email  }}</span>
          
        </div>
    </div>
    
   
</div>


@endsection
