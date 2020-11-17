@extends('frontView.master')

@section ('title_area')
a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme
@endsection



 

@section ('css_js')



@endsection

<style type="text/css">
  td#status p {
    float: left;
    padding: 5px;
    border-radius: 10px;
}
h4.font-semibold.mb-2 {
    font-size: 24px;
}
.flex {
    margin: 20px;
}

@media screen and (max-width: 768px) {

	div#ordered_product_status {
   		 width: 100% !important;
	}
	div#ordered_product_list {
    width: 100% !important;
	}
	div#order_customer_info{
		 width: 100% !important;
	}
	}


}

</style>


@section("products")

<div id="order_details_content" style="width: 100%;background: #f3f3f3;float: left;">

	<div id="order_list" style="width: 80%;padding: 10px;margin: auto;">
    
		<div class="alert alert-success" style="font-size: 20px !important;">
		  <strong>Orders</strong> Here is details of order number no : <strong style="color: #ad4230"> #eshop{{ $orders[0]->order_number }}</strong><br>
		  Order Date: <strong style="color: #ad4230"> {{ $orders[0]->orderdate }}</strong>
		</div>

		<div id="order_details" style="background-color: #f3f3f3;width: 100%;height: auto;margin: auto;float: left;margin-bottom: 25px;"> 

					<div id="ordered_product_status" style="background-color: #fff;width:68%;height: auto;float: left;border-radius: 10px;"> 

								<table class="table" style="background-color: #ffffff;">

									 <thead>
									    <tr>
									      <th scope="col">Product</th>
									      <th scope="col">Price * Quantity</th>
									      
									      <th scope="col">Sub Total</th>
									    </tr>
									</thead>
									
								  <tbody> 
								  
								   <?php $i=0; ?>
								    @foreach( $orders as $order) 
								    <tr>

								      <th style="color: #01233f;font-weight: bold;">
								      	{{ ++$i }}  ||  <img style="height: 80px;width: 80px;" src="{{ asset('public/') }}/{{ ($order->productImage) }}">  [{{  $order->pro_name }}]
								      </th>
								      
								      <td style="vertical-align: middle;">৳{{ $order->pro_price }} X {{ $order->pro_qty }}</td>

								      <?php
								        $subtotal= $order->pro_price *$order->pro_qty;
								        //echo $subtotal;
								      ?>

								      <td  style="color: #0a90ff;font-weight: bold;vertical-align: middle;">৳{{ $subtotal }}</td>      
								       
								    </tr>

								    @endforeach

								  </tbody>
								</table>

								<hr>

								<table class="table" style="background-color: #fff;">
								  <tbody>								  

								    <tr style="background-color: #6aa82c">
								      <td></td><td></td><td></td><td></td>
								      <td style="color: #01233f;font-weight: bold;">Grant total  : </td>   
								      <td  style="color: #0a90ff;font-weight: bold;color: #fff">৳{{  $order->subtotal  }}</td>           
								    </tr>

								     <tr>
								   	  <td></td><td></td><td></td><td></td>
								      <td style="color: #01233f;font-weight: bold;">Shipping Charge will be apply :</td>
								      <td  style="color: #0a90ff;font-weight: bold;">৳ 50</td>             
								    </tr>

								  </tbody>
								</table>

					</div>

				<div id="ordered_product_list" style="background-color: #b8ce9c;width:30%;height: auto;float: right;border-radius: 10px;">

						<table class="table" style="background-color: #f3f3f3;    margin: 0px;">

									 <thead>
									    <tr style="background-color: #6aa82c;">
									      <th style="color: #fff">Order Status</th><th></th>
									    </tr>
									</thead>
									
								  <tbody> 							  
								   
								   <tr style="background-color: #e2ff8d">
								      <td style="color: #314c4c;    font-size: 18px;    font-weight: bold;font-style: italic;">Paid..</td>
								       <td>
                                          <i class="fa fa-check" style="font-size:28px;color:#22c50e"></i>
                                        </td>        
								       	  
								    </tr>

								    <tr style="background-color: #dcf983">
								      <td style="color: #314c4c;    font-size: 18px;    font-weight: bold;font-style: italic">Processing..</td>
								      <td>
								      	
								      	 		@if($orders[0]->status >= 2)
                                                  <i class="fa fa-check" style="font-size:28px;color:#22c50e"></i>
                                                @else
                                                  <i class="fa fa-close" style="font-size:28px;color:red"></i>
                                                @endif

                                                
								      </td>  
								    </tr>

								    <tr style="background-color: #d1f36c">
								      <td style="color: #314c4c;    font-size: 18px;    font-weight: bold;font-style: italic">Shipping..</td>
								      <td>
								      			@if($orders[0]->status >= 3)
                                                  <i class="fa fa-check" style="font-size:28px;color:#22c50e"></i>
                                                @else
                                                  <i class="fa fa-close" style="font-size:28px;color:red"></i>
                                                @endif

								      </td>  
								    </tr>

								    <tr style="background-color: #c4ef44">
								      <td style="color: #314c4c;    font-size: 18px;    font-weight: bold;font-style: italic">Delivered</td>
								      <td>
								      			@if($orders[0]->status == 4)
                                                  <i class="fa fa-check" style="font-size:28px;color:#22c50e"></i>
                                                @else
                                                  <i class="fa fa-close" style="font-size:28px;color:red"></i>
                                                @endif
								      </td>  
								    </tr>

								  </tbody>
								</table>

				</div>


		<div id="order_customer_info" style="background-color: #f3f3f3;width: 30%; margin-bottom: 20px;float: right;"> 
			<div id="order_customer_info_details" style="width: 100%;height: auto;float: left; margin-top: 20px;    border-radius: 10px;padding: 10px;    background-color: #19c880;
    color: #f3f3f3;"> 

					<div class="w-full mt-4 md:mt-0">
						<h4 class="font-semibold mb-2">Bills To</h4>
						<div class="flex">
							<div>
								<h4 class="font-semibold">Order No : #eshop{{ $orders[0]->order_number }}</h4>
								<p class="text-gray-600 text-sm">Name :{{ $orders[0]->firstname }}</p>
								<p class="text-gray-600 text-sm">Emai{{ $orders[0]->email }}</p>
								<p class="text-gray-600 text-sm">Contact No :{{ $orders[0]->contactno }}</p>
							</div>
						</div>
					</div>

			</div>

			<button style="margin-top: 10px" class="btn btn-primary"onclick="window.print()">Print Order Details</button>
			
		</div>



		</div>	




	</div>


	


	

</div>



@endsection

 