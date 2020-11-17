@extends('frontView.master')

@section ('title_area')
a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme
@endsection


<style type="text/css">

.bgimg  {
    height: 100%;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
    margin: auto;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
      color: #861818;
    font-weight: bolder;
}

hr {
  margin: auto;
  width: 40%;

}

</style>

@section ('css_js')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

@endsection


@section("products")

<div class="bgimg" style="">
  <div class="topleft">
    <p></p>
  </div>
  <div class="middle">
    <h1 style="color: #ff9d23">
      Your Order number is:
      @if(Session::has('success'))
        <div class="alert alert-success">
            #{{Session::get('success')}}
        </div>
      @endif

</h1>
    <hr>
    <p>Thanks for order</p>
     <p>We will mail you shortly about your order with order number.Please bring the order number for further query</p>
  </div>
  <div class="bottomleft">
    <p style="color: #46763d">Thanks for stay with us</p>
  </div>
</div>

@endsection

 