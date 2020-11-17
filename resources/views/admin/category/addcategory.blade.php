@extends('admin.dashboard')

@section('content_heading')
  
  Category Add
<br>
  {{ Session::get('message') }}

@endsection
<style type="text/css">
 .form-group label {
    color: #7a3a86 !important;
    font-weight: bold;
}
</style>
@section('maincontent')
     
<div id="category_add" style="max-width: 500px;" >
                
{!! Form::open(['route' => 'save.category','method'=>'post','role'=>'form']) !!}


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <div class="form-group">
    <label for="">Category Name</label>
    <input type="text" class="form-control" name="category_name" id="" aria-describedby="" placeholder="Category Name">
    <small id="" class="form-text text-muted">Category Name will be unique.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Short Description</label>
    <textarea class="form-control" placeholder="Enter short Description" name="shortdescription"></textarea>
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Publication Status</label>
             <select class="form-control" name="publicationstatus">
                  <option value="1">Published</option> 
                  <option value="0">Unpublished</option>                                              
              </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}

</div>


@endsection