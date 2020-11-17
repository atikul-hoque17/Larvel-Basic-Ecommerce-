@extends('frontView.master')

@section ('title_area')
a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme
@endsection

<style type="text/css">
a.single-item {
    color: #19c880 !important;
    font-weight: bold !important;
    /* background: #19c880 !important; */
    padding: 10px 18px !important;
}
a.single-item:hover {
    
    background: #0a7147  !important;
    color: #fff !important;
}
.men-thumb-item .pro-image-front {
    opacity: 1;
    visibility: visible;
    width: 259px !important;
    height: 280px !important;
}
</style>

@section ('css_js')

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('frontend') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
  <script src="{{ asset('frontend') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
  <script type="text/javascript" src="{{ asset('frontend') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('frontend') }}/js/jquery.easing.min.js"></script>

@endsection


@section("products")

  @if(Session::has('cart'))


<div id="cartview" style=" padding: 5px;margin: auto;width: 80%;">
 <p class="h3">Shoping Cart</p>
<table class="table table-sm align-middle">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; ?>
    <?php foreach(Cart::content() as $row) :?>
    <tr>
      <th scope="row">{{ ++$i }}</th>
      <td><img style="height: 40px;width: 40px;" src="{{ asset($row->options->pic) }}"><?php echo $row->name; ?></td>
      <td><input type="number" name="quantity" value="1" style="width: 40px"></td>
      <td>$<?php echo $row->price; ?></td>
       <td>$<?php echo $row->price; ?></td>


    </tr>
  <?php endforeach;?>
  </tbody>
</table>

</div>

    @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No items in cart!</h2>
                </div>
            </div>
        @endif


@endsection

