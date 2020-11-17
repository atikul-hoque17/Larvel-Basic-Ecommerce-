@extends('admin.dashboard')

@section('content_heading')
  
  Product Add
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
                
{!! Form::open(['route' => 'save.product','method'=>'post','role'=>'form','enctype'=>'multipart/form-data']) !!}


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
    <input type="text" class="form-control" name="product_name" id="" aria-describedby="" placeholder="Product Name">
    <small id="" class="form-text text-muted">Product Name </small>
  </div>
 
   <div class="form-group">
    <label for="exampleInputPassword1">Category Name</label>
             <select class="form-control" name="caregoryId">
                @foreach( $category as $singlename) 
                  <option value="{{ $singlename->id }}">{{ $singlename->categoryName}}</option>
                @endforeach                                              
              </select>
  </div>

  <div class="form-group">
    <label for="">Product Price</label>
    <input type="number" class="form-control" name="price" id="" aria-describedby="" placeholder="Product price">
    <small id="" class="form-text text-muted">Product price</small>
  </div>
  <div class="form-group">
    <label for="">Product Quantity</label>
    <input type="number" class="form-control" name="qty" id="" aria-describedby="" placeholder="Product Quantity">
    <small id="" class="form-text text-muted">Product Quantity</small>
  </div>

  
  <div class="form-group">
    <label for="">Product Description</label>
    <textarea class="form-control" placeholder="Enter  Description" name="description"></textarea>
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
    <label for="">Product Image</label>
    <input type="file"  name="picture">
    <small id="" class="form-text text-muted">Product Image</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}

</div>


@endsection