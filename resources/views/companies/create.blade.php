@extends('companies.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>create company</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-success" href="{{ route('companies.index') }}" >back</a>
        </div>
    </div>
</div>

<!-- @if($errors ->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There was some problems with your input.  <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
@endif -->

<form action="{{ route('companies.store')}}" method="POST" enctype="multipart/form-data" >
@csrf
<div class="row">
    <!-- company name -->
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text"  class="form-control" name="name"     placeholder="name">
        </div>
    </div>
    <!-- company email -->
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
    </div>
    <!-- company logo -->
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>logo:</strong>
            <input type="file"  class="form-control" name="logo_image" placeholder="logo_image">
        </div>
    </div>

  


<!-- website -->
<div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Website:</strong>
            <input type="text" class="form-contro" name="website" placeholder="website">
        </div>
    </div>
<!-- button -->
    <div class="col-xs-12  col-sm-12 col-md-12">
       <input type="submit" class="btn btn-primary" value="submit">

     
    </div>
</div>

</form>

@endsection

