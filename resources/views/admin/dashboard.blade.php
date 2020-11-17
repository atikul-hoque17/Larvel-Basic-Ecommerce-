
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('public/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/libs/css/style.css')}}    ">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}} ">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/charts/chartist-bundle/chartist.css')}} ">
    <link rel="stylesheet" href=" {{ asset('public/assets/vendor/charts/morris-bundle/morris.css')}} ">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}  ">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/charts/c3charts/c3.css')}} ">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}} ">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <title>E Admin Panel</title>
</head>
<style type="text/css">
    .dashboard-content {
    padding: 30px 30px 60px 30px;
    background: #fff;
    }
    .form-control {
       
        color: #000;
    }
    textarea.form-control {   
    color: #000;
    }

    select.form-control {
    color: #000000;
    }

  


</style>
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

         @include('admin.include.header')
        
        <!-- left sidebar -->
        <!-- ============================================================== -->
         @include('admin.include.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E- Dashboard  </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">@yield('content_heading')</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    	 <div class="ecommerce-widget">

                    			 @yield('maincontent')  
                    
                   		 </div>



                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
                    @include('admin.include.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->


    <!-- jquery 3.3.1 -->




    <script src="{{ asset('public/assets/vendor/jquery/jquery-3.3.1.min.js')}}  "></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.js')}} "></script>
    <!-- slimscroll js -->
    <script src="{{ asset('public/assets/vendor/slimscroll/jquery.slimscroll.js')}}  "></script>
    <!-- main js -->
 
    <!-- chart chartist js -->
    <script src=" {{ asset('public/assets/vendor/charts/chartist-bundle/chartist.min.js')}}  "></script>
    <!-- sparkline js -->
    <script src=" {{ asset('public/assets/vendor/charts/sparkline/jquery.sparkline.js')}}  "></script>
    <!-- morris js -->
    <script src=" {{ asset('public/assets/vendor/charts/morris-bundle/raphael.min.js')}} "></script>
    <script src="{{ asset('public/assets/vendor/charts/morris-bundle/morris.js')}}  "></script>
    <!-- chart c3 js -->
    <script src="{{ asset('public/assets/vendor/charts/c3charts/c3.min.js')}} "></script>
    <script src=" {{ asset('public/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}} "></script>
    <script src="{{ asset('public/assets/vendor/charts/c3charts/C3chartjs.js')}}   "></script>
    <script src=" {{ asset('public/assets/libs/js/dashboard-ecommerce.js')}}  "></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  
<!-- 
     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script> -->

    <script type="text/javascript">
        
          // here for deleted data from admin by ajax
          
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
                            swal("Done!","succesfully deleted!","success");
                            $('#product_contents').load(' #product_contents');
                          }
                      })
                  } else {
                    swal("Safe Data!");
                  }
                });

              });

              // here end for deleted data from admin by ajax


             // here for order status comtrolling data for user by ajax
           

                // this is for processing

              $('body').on('click', '.processing', function () {
                  var user_id = $(this).data("id"); 
                  
                 // alert(user_id);
                            swal({
                  title: "Are you Want to update?",
                  text: "Once update, This will be Permanently update!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((Update) => {
                  if (Update) {
                        $.ajax({
                          url:"{{route('create.process')}}",
                          mehtod:"get",
                          data:{id:user_id},
                          success:function(data)
                          {
                               // alert(data);
                            swal("Done!","Order Processing!","success");
                            $('#order_details').load(' #order_details');
                            $('#order_list').load(' #order_list');
                          }
                      })
                  } else {
                    swal("Safe Data!");
                  }
                });

              });


              
              // this is for shipped

              $('body').on('click', '.shipped', function () {
                  var user_id = $(this).data("id"); 
                  
                 // alert(user_id);
                            swal({
                  title: "Are you Want to update?",
                  text: "Once update, This will be Permanently update!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((Update) => {
                  if (Update) {
                        $.ajax({
                          url:"{{route('create.shipped')}}",
                          mehtod:"get",
                          data:{id:user_id},
                          success:function(data)
                          {
                               // alert(data);
                            swal("Done!","Order Shipping!","success");
                            $('#order_details').load(' #order_details');
                            $('#order_list').load(' #order_list');
                          }
                      })
                  } else {
                    swal("Safe Data!");
                  }
                });

              });

              // here  order status comtrollingd data for user by ajax shipped

               // this is for deliver

              $('body').on('click', '.delivered', function () {
                  var user_id = $(this).data("id"); 
                  
                 // alert(user_id);
                            swal({
                  title: "Are you Want to update?",
                  text: "Once update, This will be Permanently update!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((Update) => {
                  if (Update) {
                        $.ajax({
                          url:"{{route('create.delivered')}}",
                          mehtod:"get",
                          data:{id:user_id},
                          success:function(data)
                          {
                               // alert(data);
                            swal("Done!","Order Shipping!","success");
                            $('#order_details').load(' #order_details');
                            $('#order_list').load(' #order_list');
                          }
                      })
                  } 
                });

              });

              // here  order status comtrollingd data for user by ajax shipped








    </script>

   


         





</body>
 
</html>