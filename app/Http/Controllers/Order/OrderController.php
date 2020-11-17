<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customerinfo;
use Response;
use DB;

class OrderController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        
    	// $orders=DB::table('orders')
		   //                  ->join('customerinfos','orders.order_number','=','customerinfos.order_number')
		   //                  ->join('products','orders.pro_id','=','products.id')
		   //                  ->select('orders.*','customerinfos.*','customerinfos.id as customerinfoID','orders.id as orderID','products.pic as productImage')		                
		   //                  ->get();

		   //            //    return Response::json($orders);
		                    
		   //        return view('admin.order.order',['orders'=>$orders]);

    	$orders = DB::table('customerinfos')->get();
    	return view('admin.order.admin_order',['orders'=>$orders]);


    }

    public function orderdetails ($id){

    				$order_number=$id;

		    		$orders=DB::table('orders')
		                    ->join('customerinfos','orders.order_number','=','customerinfos.order_number')
		                    ->join('products','orders.pro_id','=','products.id')
		                    ->select('orders.*','customerinfos.*','customerinfos.id as customerinfoID','orders.id as orderID','products.pic as productImage')
		                    ->where('customerinfos.order_number', $order_number)
		                    ->get();

		       //return Response::json($orders);
		                    
		       return view('admin.order.order_details',['orders'=>$orders]);

	    }






		public  function addprocess(Request $request)
        {

        //  return $request->input('id');

         	$updatedID=$request->input('id');
	        $updateproduct=Customerinfo::where('order_number',$updatedID)->first();
	        $updateproduct->status=2;
	        $updateproduct->save();  
		}	

		public  function shipped(Request $request)
        {

        //  return $request->input('id');

         	$updatedID=$request->input('id');
	        $updateproduct=Customerinfo::where('order_number',$updatedID)->first();
	        $updateproduct->status=3;
	        $updateproduct->save();  
		}	

		public  function delivered(Request $request)
        {

        //  return $request->input('id');

         	$updatedID=$request->input('id');
	        $updateproduct=Customerinfo::where('order_number',$updatedID)->first();
	        $updateproduct->status=4;
	        $updateproduct->save();  
		}

		






}
