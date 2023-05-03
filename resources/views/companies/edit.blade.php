@extends('companies.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>crud oper</h2>
        </div>
        <div class="pull-right">
            <a  class="btn btn-success" href="{{ route('companies.index') }}" > company list</a>
        </div>
    </div>
</div>



<form action="{{route('companies.update',$edit_value->id)}}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <!-- company name -->
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control=" value="{{ $edit_value->name }}"  placeholder="name">
        </div>
    </div>
    <!-- company email -->
    <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            <input type="email" name="email" class="form-control=" value="{{ $edit_value->email }}"   placeholder="email">
        </div>
    </div>
    <!-- company logo -->
    @if("{{asset('/'.$edit_value->logo_image)}}")
        <img src="{{asset('/'.$edit_value->logo_image)}}" id="image"> 
             <button type="button" class="btn btn-primary" onclick="up()" id="btnuploadimage">update image </button>
             <input type="file" name="logo_image"  style="display:none" id="image_upload" value="{{$edit_value->logo_image}} "  class="form-control form-control-lg" />
            
    @else
            <p>No image found</p>
    @endif
   <!-- company website -->
   <div class="col-xs-12  col-sm-12 col-md-12">
        <div class="form-group">
            <strong>website:</strong>
            <input type="text" name="email" class="form-control=" value="{{ $edit_value->website}}"   placeholder="website">
        </div>
    </div>
<!-- button -->
    <div class="col-xs-12  col-sm-12 col-md-12">
       <input type="submit" class="btn btn-primary">

       </button>
    </div>
</div>

</form>

@endsection
<script type="text/javascript">
  function up(){
    var image = document.getElementById('image');
    var file = document.getElementById('image_upload');
    var btn = document.getElementById('btnuploadimage')
    image.style.display = 'none';
    btn.style.display = 'none';
    file.style.display = 'block';
  }
  </script>
