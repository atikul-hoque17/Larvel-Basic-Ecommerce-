


@extends('admin.dashboard')

@section('content_heading')
  
  Category Edit
<br>
  {{ Session::get('message') }}

@endsection

@section('maincontent')

<div id="category_add" style="max-width: 500px;" >

{!! Form::open(['route' => 'password.update','method'=>'post','name'=>'editform','role'=>'form']) !!}

                                       <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" value="{{ $category -> categoryName }}" placeholder="Enter Category Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control" placeholder="Enter short Description" name="shortdescription">{{ $category -> shortDescription }}</textarea>
                                        </div>

                                         <div class="form-group">
                                            <label>Publication status</label>
                                            <select class="form-control" name="publicationstatus">
                                              <option value="1">Published</option> 
                                              <option value="0">Unpublished</option>                                              
                                            </select>
                                        </div>

                                        <input type="hidden" name="updateid" value="{{ $category->id }}">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                            <a class="btn btn-danger btn-sm" href="{{ url('/category/manage/') }}">Back</i></a> 
                                        </div>
{!! Form::close() !!}

</div>                                 <script type="text/javascript">
                                          
                                          document.forms['editform'].elements['publicationstatus'].value='{{ $category -> publicationStatus }}'
                                        </script>


@endsection


