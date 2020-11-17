@extends('frontView.master')

@section ('title_area')
a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme
@endsection


<style type="text/css">


div#shopping_chart_page {
    width: 60%;
    margin: 0 auto;
}

@media (max-width: 800px) {
   div#shopping_chart_page {
      width: 100%;
      margin: 0 auto;
  }
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

.product-image img {
    width: 150px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

@import "compass/css3";

/*
I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
*/

/* Global settings */
$color-border: #eee;
$color-label: #aaa;
$font-default: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
$font-bold: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';


/* Global "table" column settings */
.product-image { float: left; width: 20%; }
.product-details { float: left; width: 37%; }
.product-price { float: left; width: 12%; }
.product-quantity { float: left; width: 10%; }
.product-removal { float: left; width: 9%; }
.product-line-price { float: left; width: 12%; text-align: right; }


/* This is used as the traditional .clearfix class */
.group:before,
.group:after {
    content: '';
    display: table;
} 
.group:after {
    clear: both;
}
.group {
    zoom: 1;
}


/* Apply clearfix in a few places */
.shopping-cart, .column-labels, .product, .totals-item {
  @extend .group;
}


/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}


/* Body/Header stuff */


h1 {
  font-weight: 100;
}

label {
  color: $color-label;
}

.shopping-cart {
  margin-top: -45px;
}


/* Column headers */
.column-labels {
  label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid $color-border;
  }
  
  .product-image, .product-details, .product-removal {
    text-indent: -9999px;
  }
}


/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid $color-border;
  
  .product-image {
    text-align: center;
    img {
      width: 100px;
    }
  }
  
  .product-details {
    .product-title {
      margin-right: 20px;
      font-family: $font-bold;
    }
    .product-description {
      margin: 5px 20px 5px 0;
      line-height: 1.4em;
    }
  }
  
  .product-quantity {
    input {
      width: 40px;
      
    }
  }
  
  .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: $font-bold;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .remove-product:hover {
    background-color: #a44;
  }
}


/* Totals section */
.totals {
  .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
    
    label {
      float: left;
      clear: both;
      width: 79%;
      text-align: right;
    }
    
    .totals-value {
      float: right;
      width: 21%;
      text-align: right;
    }
  }
  
  .totals-item-total {
    font-family: $font-bold;
  }
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid $color-border;
  }
  
  .column-labels {
    display: none;
  }
  
  .product-image {
    float: right;
    width: auto;
    img {
      margin: 0 0 10px 10px;
    }
  }
  
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
  
  .product-price {
    clear: both;
    width: 70px;
  }
  
  .product-quantity {
    width: 100px;
    input {
      margin-left: 20px;
    }
  }
  
  .product-quantity:before {
    content: 'x';
  }
  
  .product-removal {
    width: auto;
  }
  
  .product-line-price {
    float: right;
    width: 70px;
  }
  
}


/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  
  .product-removal {
    float: right;
  }
  
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
  
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
  
  .totals {
    .totals-item {
      label {
        width: 60%;
      }
      
      .totals-value {
        width: 40%;
      }
    }
  }
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


<div id="shopping_chart_page">

  @if(Session::has('cart'))


  <h1>Shopping Cart</h1>

  <div id="shopping_cart">

                          <div class="column-labels">
                            <label class="product-image">Product</label>
                            <label class="product-price">Price</label>
                            <label class="product-quantity">Quantity</label>
                            <label class="product-removal">Remove</label>
                            <label class="product-line-price">Total</label>

                          </div>

                            

                          <!-- product start from here -->
                          <?php $i=0; ?>
                          <?php foreach(Cart::content() as $row) :?>

                          <div class="product">
                          
                            <div class="product-image">
                             {{ ++$i }}  <img style="height: 40px;width: 40px;" src=" {{ asset('public/') }}/{{ ($row->options->pic) }} "><?php echo $row->name; ?>
                            </div>
                            

                            @auth
                                 <input type="hidden"  name="user_id" value="{{  Auth::user()->id  }}">
                            @endauth
                          
                            <div class="product-price"><?php echo $row->price; ?></div>
                           
                            <div class="product-quantity">

                             {!! Form::open(['route' => 'cart.update','method'=>'put','role'=>'form','name'=>'updatecart']) !!}

                             <input type="number" id="quantity" name="quantity" value="<?php echo $row->qty; ?>" style="width: 55%;float: left;" min="0" max="5">
                             <input type="hidden"  name="row_id" value="{{ $row->rowId }}">
                             <!-- <input type="submit" name="update_cart" id="update_cart" value=""> -->
                             <button class="check_ok" style="width: 30px;height: 28px;float: left;">
                               <i class="fa fa-check" style="font-size:18;color:#6aa82c"></i>
                             </button>
                                
                             {!! Form::close() !!}

                            </div>


                           
                            {!! Form::open(['route' => 'cart.update','method'=>'put','role'=>'form','name'=>'updatecart']) !!}
                            <div class="product-removal">
                              <!-- <button class="remove-product"> -->
                                <!-- <i style="height: 22px;" class="fa fa-close"></i> -->
                                <!-- <input type="hidden"  name="row_id" value="{{ $row->rowId }}"> -->

                                <a href="javascript:void(0)" id="delete_item" class="delete_item" data-id="{{ $row->rowId }}"> <i style="height: 22px;" class="fa fa-close"></i></a>
                             <!--  </button> -->

                             <!-- <button class="check_ok" style="width: 30px;height: 28px;float: left;">
                               <i class="fa fa-close" style="font-size:18;color:#6aa82c"></i>
                             </button> -->
                            </div>
                            {!! Form::close() !!}
                        



                            <div class="product-line-price"><?php echo $row->price*$row->qty; ?></div>                            
                          </div>


                            

                          <?php endforeach;?>

                          
                          
                          

                             <div class="totals">

                               <div id="checkout">
                              <!--   <button class="checkout"><i style="padding: 8px;" class="fa fa-shopping-cart" aria-hidden="true"> Checkout</i></button> -->
                              </div>
                              
                              <div id="total_sub">
                                <div class="totals-item">
                                  <label>Subtotal</label>
                                  <div class="totals-value" id="cart-subtotal">{{ Cart::subtotal() }}</div>
                                  
                                   </div>
                                <div class="totals-item">
                                  <label>Tax (5%)</label>
                                  <div class="totals-value" id="cart-tax">00.00</div>
                                </div>
                                <div class="totals-item">
                                  <label>Shipping</label>
                                  <div class="totals-value shipping" id="cart-shipping">50.00</div>
                                </div>
                                <div class="totals-item totals-item-total">
                                  <label>Grand Total</label>
                                  <div class="totals-value" id="cart-total">{{ Cart::total() }}</div>
                                </div>
                              </div>

                             

                             </div>

                           <!-- total end here -->

                  </div>

                  <div id="checkout_info">
                     
                      @auth
                        
                        {!! Form::open(['route' => 'cart.store','method'=>'post','name'=>'checkout']) !!}

                          <input type="hidden"  name="order_number" value="{{  (rand(100000,100)) }}">
                          <input type="hidden"  name="user_id" value="{{  Auth::user()->id  }}">
                                               
                          <div class="row">
                            <div class="col-75">
                              <div class="container">
                               
                                
                                  <div class="row">
                                    <div class="col-50">
                                      <h3>Billing Address</h3><hr>
                                      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                      <input type="text" id="fname" name="firstname" placeholder="Atikul hoque" required>
                                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                      <input type="text" id="email" name="email" placeholder="atikul@gmail.com" required>
                                      <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                      <input type="text" id="adr" name="address" placeholder="Dhanmondi Zigatola dhaka-1209" required>
                                      <label for="city"><i class="fa fa-institution"></i> City</label>
                                      <input type="text" id="city" name="city" placeholder="Dhaka" required>

                                      <div class="row">
                                        <div class="col-50">
                                          <label for="zip">Zip / Postal code</label>
                                          <input type="text" id="zip" name="zip" placeholder="1209" required>
                                        </div>
                                      </div>

                                    </div>

                                    <div class="col-50">
                                      <h3>Payment</h3>
                                       <p style="color: #da8215;font-weight: normal;">Order Date :{{ date('Y-m-d') }}</p>
                                       <input type="hidden" name="orderdate" value="{{ date('Y-m-d') }}">
                                      <hr>
                                      <label for="fname">Accepted </label>
                                      <div class="icon-container">
                                        <!-- <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i> -->
                                        <img style="width: 80px;" src="https://www.bkash.com/sites/all/themes/bkash/logo.png?87980">
                                      </div>
                                     
                                      <label for="cname">Phone / Mobile</label>
                                      <input type="text" id="cname" name="contactno" placeholder="01670239249">
                                      <!-- <label for="ccnum">Credit card number</label>
                                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"> -->

                                      <label for="ccnum">Bkash Transaction ID</label>
                                      <input type="text" id="ccnum" name="transactionno" placeholder="TPV32MVE5HD" required>
                                      
                                    </div>
                                    
                                  </div>
                                  
                                  <input type="submit" name="checkout" value="Continue to checkout" class="btn">
                      
                              </div>
                            </div>
                           
                          </div>


                           {!! Form::close() !!}


                       @else

                          <a href="#" class="use1" data-toggle="modal" data-target="#myModal4">
                            <div class="alert alert-danger">
                                <strong>Note! You have to login for checkout :)</strong>  <span style="font-weight: bold;">  Login Here</span>
                             </div>
                          </a>
                          
                                              
                       
                       @endauth

                  </div>



    @else
                         
                         
             <div id="shoping_cart">

                              <h1 style="text-align: center; font-size: 18px;">Shopping Cart</h1><hr>
                <!-- main shopping start from here -->

                  
                       

                          <div id="shipping_cart_sub">     

                            <div class="alert alert-danger">
                                <strong>Note!</strong> No Cart Found !
                             </div>
                             
                                <div class="shopping-cart">

                                        <div class="column-labels">
                                          <label class="product-image">Product</label>
                                          <label class="product-price">Price</label>
                                          <label class="product-quantity">Quantity</label>
                                          <label class="product-removal">Remove</label>
                                          <label class="product-line-price">Total</label>
                                        </div>

                                                              

                                        <!-- total start from here -->

                                           <div class="totals">

                                             <div id="checkout">
                                              <button class="checkout" style="display: none;"><i style="padding: 8px;" class="fa fa-shopping-cart" aria-hidden="true"> Checkout</i></button>
                                            </div>
                                            
                                            <div id="total_sub">
                                              <div class="totals-item">
                                                <label>Subtotal</label>
                                                <div class="totals-value" id="cart-subtotal" style="display: block;">0.00</div>
                                              </div>
                                              <div class="totals-item">
                                                <label>Tax (5%)</label>
                                                <div class="totals-value" id="cart-tax" style="display: block;">0.00</div>
                                              </div>
                                              <div class="totals-item">
                                                <label>Shipping</label>
                                                <div class="totals-value shipping" id="cart-shipping" style="display: block;">0.00</div>
                                              </div>
                                              <div class="totals-item totals-item-total">
                                                <label>Grand Total</label>
                                                <div class="totals-value" id="cart-total" style="display: block;">0.00</div>
                                              </div>
                                            </div>

                                           

                                           </div>

                                         <!-- total end here -->
                                      </div>
                              
                                  </div>

                                <!-- main shopping end here -->

                            </div>
    @endif


  </div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script type="text/javascript">
  /* Set rates + misc */
var taxRate = 0.00;
var shippingRate = 50.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed());
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
</script>


<script type="text/javascript">

var x = Number(document.getElementById("cart-shipping").textContent);
var y = document.getElementById("cart-subtotal").textContent;
var res = y.replace(/,/gi, "");
var s = parseInt(res);

var grnttotal= s+x;
document.getElementById("cart-total").innerHTML = grnttotal+'.00';
 $("#grnttotal").val(grnttotal);



</script> 


<script type="text/javascript">
        
          // here for deleted data for user by ajax
           
              $('body').on('click', '#delete_item', function () {
                  var delete_cart_item = $(this).data("id");   
                // alert(delete_cart_item);

                            $.ajax({
                              url:"{{route('remove.item')}}",
                              mehtod:"get",
                              data:{id:delete_cart_item},
                              success:function(data)
                              {
                                   
                                    toastr.success("Removed from cart"); 
                             //   swal("Done!","succesfully added!","success");
                                  $('#addcart').load(' #addcart');
                                  $('#shoping_cart').load(' #shoping_cart');
                                   $('#shopping_cart').load(' #shopping_cart');


                                 
                                }
                            })

              });

              // here end for deleted data for user by ajax

 

    </script>


@endsection

 