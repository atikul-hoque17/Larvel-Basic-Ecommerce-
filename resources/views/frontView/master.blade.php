<!--
Author: Soft-all
Author URL: http://soft-all.com/
-->
<!DOCTYPE html>
<html>
<head>
<title>Eshop @yield('title_area')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('public/frontend') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('public/frontend') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('public/frontend') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('public/frontend') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
  <script src="{{ asset('public/frontend') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
  <script type="text/javascript" src="{{ asset('public/frontend') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('public/frontend') }}/js/jquery.easing.min.js"></script>




<style type="text/css">
  .add_cart {
    background: #19c880 !important;
    padding: 8px 15px !important;
    color: #fff !important;
}
</style>
@yield("css_js")


</head>
<body>
<!-- header -->

@include('frontView.include.header_include')

<!-- //header-bot -->
<!-- banner -->

@include('frontView.include.menu')

<!-- //banner-top -->
<!-- banner -->

@yield("banner")

<!-- //banner -->
<!-- content -->



@yield("products")

<!-- //product-nav -->

@yield("cupon")

<!-- footer -->
@include('frontView.include.footer')
<!-- //login -->
</body>
</html>


  

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



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
        
          // here for deleted data for user by ajax
           
              $('body').on('click', '.add_cart', function () {
                  var user_id = $(this).data("id");   

                            $.ajax({
                              url:"{{route('add.cart')}}",
                              mehtod:"get",
                              data:{id:user_id},
                              success:function(data)
                              {
                                   
                                    toastr.success("Added to cart"); 
                             //   swal("Done!","succesfully added!","success");
                                 $('#addcart').load(' #addcart');
                                }
                            })

              });

              // here end for deleted data for user by ajax

              // here for empty cart data by ajax
           
              $('body').on('click', '.empty_Cart', function () {                    

                  swal({
                    title: "Are you Want to delete Cart?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                                url:"{{route('empty.cart')}}",
                                mehtod:"get",
                               // data:{id:user_id},
                                success:function(data)
                                {
                                     
                                    swal("Done!","succesfully deleted!","success"); 
                               //   swal("Done!","succesfully added!","success");
                                   $('#addcart').load(' #addcart');
                                    $('#shopping_cart').load(' #shopping_cart');
                                  }
                              })
                    } else {
                      swal("Safe Data!");
                    }
                  });
                  
              });

              /// here end for empty cart data by ajax





            // here for deleted data for user by ajax
           
              $('body').on('click', '.processing', function () {
                  var user_id = $(this).data("id"); 

                  alert(user_id);  

                            // $.ajax({
                            //   url:"{{route('add.cart')}}",
                            //   mehtod:"get",
                            //   data:{id:user_id},
                            //   success:function(data)
                            //   {
                                   
                            //         toastr.success("Added to cart"); 
                            //  //   swal("Done!","succesfully added!","success");
                            //      $('#addcart').load(' #addcart');
                            //     }
                            // })

              });

              // here end for deleted data for user by ajax



    </script>