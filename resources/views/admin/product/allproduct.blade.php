


@extends('admin.dashboard')

@section('content_heading')
  
  Category Manage
<br>
  {{ Session::get('message') }}

@endsection

@section('maincontent')



        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="product_contents">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Picture</th>
                                        <th>Publication Status</th> 
                                        <th>Pro Status</th>                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="">
                                 <?php $i=0; ?>
                                   @foreach( $products as $product) 
                                       <tr class="odd gradeX">                                                                

                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->productName }} </td>
                                        <td>{{ $product->catName }}</td>
                                        <td>{{ $product->price }} </td>
                                        <td>{{ $product->qty }} </td>
                                        <td>
                                          <!-- <img style="height: 40px;width: 40px;" src="{{ asset($product->pic) }}"> -->
                                          <img style="height: 40px;width: 40px;" src="{{ asset('public') }}/{{$product->pic}}">
                                         </td>
                                        <td class="center">{{ ($product->publicationStatus == 1)? 'Published' : 'Unpublished'  }}</td>
                                        <td class="center">
                                               @if($product->prostatus == 1)
                                                   Top Sale
                                                @elseif($product->prostatus == 2)
                                                    New Collection
                                                @elseif($product->prostatus == 3)
                                                    Discount
                                                @endif

                                          <!-- ($product->prostatus == 1)? 'Published' : 'Unpublished'   -->


                                       </td>


                                             

                                        <td class="center">
                                          <a class="btn btn-success btn-sm" href="{{ url('/products/view/product/'. $product->id) }}"><i class="fas fa-eye"></i></a>
                                           <a class="btn btn-primary btn-sm" href="{{ url('/product/edit/'. $product->id) }}"><i class="fas fa-edit"></i></a> 
                                         
                                           <!-- <a id="delete" class="btn btn-danger btn-sm" href="{{ url('/products/delete/'. $product->id) }}"><i class="fas fa-trash-alt"></i></a> -->

                                           <a href="javascript:void(0)" id="delete-product" data-id="{{ $product->id }}" class="btn btn-danger btn-sm delete-product"><i class="fas fa-trash-alt"></i></a>

                                   
                                        </td>

                                      </tr>
                                     @endforeach
                                </tbody>
                             </table>     

                         



                        </div>      <br>
                          {{ $products->onEachSide(3)->links() }} 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script type="text/javascript">
          $(document).ready(function () {   
              $('body').on('click', '.delete-product', function () {
                  var user_id = $(this).data("id");   



                  // if(confirm("Are you sure you want to Delete this data?"))
                  // {
                  //     $.ajax({
                  //         url:"{{route('product.remove')}}",
                  //         mehtod:"get",
                  //         data:{id:user_id},
                  //         success:function(data)
                  //         {
                  //              // alert(data);
                  //           swal("Done!","It was succesfully deleted!","success");
                  //           $('#product_contents').load(' #product_contents');
                  //         }
                  //     })
                  // }
                  // else
                  // {
                  //     return false;
                  // }

                   // $('#dataTables-example').html();


                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                          url:"{{route('product.remove')}}",
                          mehtod:"get",
                          data:{id:user_id},
                          success:function(data)
                          {
                               // alert(data);
                            swal("Done!","It was succesfully deleted!","success");
                            $('#product_contents').load(' #product_contents');
                          }
                      })
                  } else {
                    swal("Safe Data!");
                  }
                });




              });
          });
        </script>


  




@endsection


