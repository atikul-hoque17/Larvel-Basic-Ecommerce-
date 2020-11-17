<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use DB;
use Cart;
use App\Customerinfo;
use App\Order;
use Auth;
use Response;

class CartController extends Controller
{
    //


		public function cartlist(){
			
			return view('frontView.cart.viewcart');
		}	


		public  function addcart(Request $request)
        {

            //return response()->json($request);

             $product = Product::where('id', $request->input('id'))->firstOrFail();
		
             $request_id=$request->input('id');
			 $proName =$product->productName;
			 $proPrice=$product->price;
			 $propic=$product->pic;        

		    if($product){                 
                 Cart::add($request_id,$proName, 1,$proPrice, 550,['pic' => $propic]);
                 $notification=array('messege'=>'Successfully Added to Cart','alert-type'=>'success');                        
              }

				// Cart::add($id,$proName, 1,$proPrice, 550,['pic' => $propic]);
				// // Cart::add('293ad', 'Product 1', 1, 9.99, ['pic' => $propic]);
				// $notification=array('messege'=>'Successfully Added to Cart', 'alert-type'=>'success');
            	// return back()->with($notification);
				 //Cart::add($id, $pro->productName,1, $pro->price,['size'=>'medium']);
		}	

		public  function addcartbyID($id)
        {

           echo $id;

           $product = Product::where('id', $id)->firstOrFail();
          
		
                 $request_id=$id;
			echo $proName =$product->productName;
			echo $proPrice=$product->price;
			echo $propic=$product->pic;        

		    if($product){                 
                 Cart::add($request_id,$proName, 1,$proPrice, 550,['pic' => $propic]);
                 $notification=array('messege'=>'Successfully Added to Cart','alert-type'=>'success');                        
              }

				// Cart::add($id,$proName, 1,$proPrice, 550,['pic' => $propic]);
				// // Cart::add('293ad', 'Product 1', 1, 9.99, ['pic' => $propic]);
				// $notification=array('messege'=>'Successfully Added to Cart', 'alert-type'=>'success');
            	// return back()->with($notification);
				 //Cart::add($id, $pro->productName,1, $pro->price,['size'=>'medium']);

              $notification=array(
                'messege'=>'Successfully Added to Cart',
                'alert-type'=>'success'
                 );
              return Redirect()->back()->with('message', 'Add to card Successfully');

		}	


		public function updatecart(Request $request )
	    {
	        //return response()->json($request);    
	        $row_id=$request->row_id;
	        $quantity=$request->quantity;
	       Cart::update($row_id,['qty'=>$quantity]);        	
        	$notification=array('messege'=>'Cart Updated','alert-type'=>'success');
            return Redirect()->back()->with($notification);
   
	    }


	    public function removeitem(Request $request){

	    	//return response()->json($request);

	    	$id=$request->input('id');

	    	// $quantity='2';
	     //    Cart::update($request->input('id'),['qty'=>$quantity]);        	
      //   	$notification=array('messege'=>'Cart Updated','alert-type'=>'success');
      //    //   return Redirect()->back()->with($notification);
	    	
        	//Cart::remove(456);

	    	 Cart::remove($id);
	    					
	    }

	    public function emptyCart()
	    {
	        Cart::destroy();       
	    }


	    public function stor_order(Request $request)
	    {	        

	        $cartItems=Cart::content();
	    //  return response()->json($cartItems); 

	      
	       		    $order_number=$request->order_number;
			        $user_id=$request->user_id;
			        $firstname=$request->firstname;
			        $email=$request->email;
			        $address=$request->address;
			        $city=$request->city;	
			        $zip=$request->zip;
			        $orderdate=$request->orderdate;
			        $transactionno=$request->transactionno;
			        $contactno=$request->contactno;
			        $cartsbtotal=Cart::subtotal();

			        $cartsubtotal = str_replace(',', '', $cartsbtotal);

			      $customerinfo= new Customerinfo();
			      $customerinfo->user_id =$user_id;
			      $customerinfo->order_number =$order_number;
			      $customerinfo->subtotal =$cartsubtotal;
			      $customerinfo->firstname =$firstname;
			      $customerinfo->email =$email;
			      $customerinfo->contactno =$contactno;
			      $customerinfo->address =$address;
			      $customerinfo->city =$city;
			      $customerinfo->zip =$zip;
			      $customerinfo->orderdate =$orderdate;      
			      $customerinfo->orderdate =$orderdate;      
			      $customerinfo->transactionno =$transactionno;
			      $customerinfo->status =1;
			      $customerinfo->save();



	        foreach ($cartItems as $product ) {
	        	 
 				 $order_number;
 				 $pro_name=$product->name;
 				 $pro_id=$product->id;
 				 $pro_qty=$product->qty;
 				 $pro_price=$product->price;

 				$orders= new Order();
			      $orders->order_number =$order_number;
			      $orders->pro_id =$pro_id;
			      $orders->pro_name =$pro_name;
			      $orders->pro_qty =$pro_qty;      
			      $orders->pro_price =$pro_price;  			          
			      $orders->save();
			}

			Cart::destroy();   

			$order_number=$request->order_number;    

			$notification=array('messege'=>'Order Placed !','alert-type'=>'success');
            //return Redirect()->back()->with($notification);
             return Redirect('/order/done')->withSuccess($order_number);
            // return view('frontView.cart.orderdone',['order_number'=>$products]);

	    }




	    public function orderinfo(){
	    	return view('frontView.cart.orderdone');
	    }



	    

	    public function orderlist(){

	    	$currentuserid = Auth::user()->id;


	    	// here find all order from this user

		        	// $orders=DB::table('orders')
		         //            ->join('customerinfos','orders.order_number','=','customerinfos.order_number')
		         //            ->join('users','customerinfos.user_id','=','users.id')
		         //            ->select('orders.*','customerinfos.*','users.name','customerinfos.id as customerinfoID','orders.id as orderID','users.id as userID')
		         //            ->where('customerinfos.user_id', $currentuserid)
		         //            ->get();

	    			           

                    // here find last order from this user and order number

                    // $last_id_customer = DB::table('customerinfos')
                    // 		->latest('id')
                    // 		->where('customerinfos.user_id', $currentuserid)
                    // 		->first();

                    // $last_order_number =$last_id_customer->order_number;


                    // // here find last order product list from this user and order number

                    // $lastorderlist = DB::table('orders')
                    // 		->join('products','orders.pro_id','=','products.id')
                    // 		->select('orders.*','products.pic as productImage')
                    // 		->where('orders.order_number', $last_order_number)
                    // 		->get();


	    		$orders = DB::table('customerinfos')
                    		->where('customerinfos.user_id', $currentuserid)
                    		->get();

              	//  return Response::json($orders);

          return view('frontView.order.orderlist',['orders'=>$orders]);
    	}



    	




    	public function orderdetails ($id){

    		$order_number=$id;
	    	
	    	$currentuserid = Auth::user()->id;

		    		$orders=DB::table('orders')
		                    ->join('customerinfos','orders.order_number','=','customerinfos.order_number')
		                    ->join('products','orders.pro_id','=','products.id')
		                    ->select('orders.*','customerinfos.*','customerinfos.id as customerinfoID','orders.id as orderID','products.pic as productImage')
		                    ->where('customerinfos.order_number', $order_number)
		                    ->get();

		                 //  return Response::json($orders);
		                    
		          return view('frontView.order.vieworder',['orders'=>$orders]);

	    }




}
