@extends('admin.dashboard')

@section('content_heading')
  
  Product Edit
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
                
{!! Form::open(['url' => '/product/update','method'=>'post','role'=>'form','enctype'=>'multipart/form-data','name'=>'productedit']) !!}


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
    <label for="">Product Name</label>
    <input type="text" class="form-control" name="product_name" id="" value="{{ $producteditbyid->productName }}" >
    <small id="" class="form-text text-muted">Product Name </small>
  </div>
 
   <div class="form-group">
    <label for="exampleInputPassword1">Category Name</label>
             <select class="form-control" name="caregoryId">
                @foreach( $categories as $category) 
                  <option value="{{ $category->id }}">{{ $category->categoryName}}</option>
                @endforeach                                              
              </select>
  </div>

  <div class="form-group">
    <label for="">Product Price</label>
    <input type="number" class="form-control" name="price" value="{{ $producteditbyid->price }}">
    <small id="" class="form-text text-muted">Product price</small>
  </div>
  <div class="form-group">
    <label for="">Product Quantity</label>
    <input type="number" class="form-control" name="qty" value="{{ $producteditbyid->qty }}">
    <small id="" class="form-text text-muted">Product Quantity</small>
  </div>

  
  <div class="form-group">
    <label for="">Product Description</label>
    <textarea class="form-control"  name="description" >{{ $producteditbyid->Description }}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Publication Status</label>
             <select class="form-control" name="publicationstatus">
                  <option value="1">Published</option> 
                  <option value="0">Unpublished</option>                                              
              </select>
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Product Status</label>
             <select class="form-control" name="pstatus">
                  <option value="1">Top Sale</option> 
                  <option value="2">New Collection</option>    
                  <option value="3">Discount</option>                                              
              </select>
  </div>

  <div class="form-group">
    <input type="file"  name="picture">
    <small id="" class="form-text text-muted">New Product Image</small>
  </div>

  <div class="form-group">
    <img style="width: 180px;height: 180px;" src="{{ asset('public/') }}/{{ $producteditbyid->pic }}">  
    <small id="" class="form-text text-muted">Old Image</small>
  </div>

  <input type="hidden" name="updateid" value="{{ $producteditbyid->id }}">
  
  <button type="submit" class="btn btn-primary btn-sm">Update</button>
  <a class="btn btn-danger btn-sm" href="{{ url('/product/manage/') }}">Back</i></a> 
    
{!! Form::close() !!}

</div>

                                        <script type="text/javascript">
                                          
                                          document.forms['productedit'].elements['caregoryId'].value='{{ $producteditbyid -> caregoryId }}'
                                          document.forms['productedit'].elements['publicationstatus'].value='{{ $producteditbyid -> publicationStatus }}'
                                           document.forms['productedit'].elements['pstatus'].value='{{ $producteditbyid -> prostatus }}'
                                        </script>


@endsection