<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use DB;


use Illuminate\Http\Request;

class FrontendView extends Controller
{
    //
    // public function __construct()    {
    //     $this->middleware('auth');
    // }

    public function index(){

          $topsale=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.prostatus',1)
                    ->paginate(20);
        
          $newproduct=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.prostatus',2)
                    ->paginate(20);          
                   //  return response()->json($products);
           $discount=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.prostatus',3)
                    ->paginate(20);    

           
       return view('frontView.home.homecontent',['topsale'=>$topsale ,'newproduct'=>$newproduct ,'discount'=>$discount]);
    	 // return view('frontView.home.homecontent');





    }


    public function newcollection()
    {
        //
      $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.prostatus',2)
                    ->paginate(8);  
        $titlename="New Collection";

        return view('frontView.home.extraproduct',['products'=>$products ,'titlename'=>$titlename]);

    }

     public function topsale()
    {
        //
         $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.prostatus',1)
                    ->paginate(8);  
        $titlename="Top Sales";

        return view('frontView.home.extraproduct',['products'=>$products ,'titlename'=>$titlename]);

    }

    public function discount()
    {
        //
         $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.prostatus',3)
                    ->paginate(8);  
        $titlename="Discount";

        return view('frontView.home.extraproduct',['products'=>$products ,'titlename'=>$titlename]);

    }


    

       public function show($id)
    {
        //
        $productsbyId = Product::where('id',$id)->first();
        // return response()->json($productsbyId);
        return view('frontView.home.productview')->with(compact('productsbyId'));

    }

    public function tshirt(){

    	
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',1)
                    ->paginate(8);
        
					
					// return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

    	// return view('frontView.home.products');
    }

    public function wallet(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',6)
                    ->paginate(8);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }

    public function footware(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',7)
                    ->paginate(8);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }
       public function watch(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',8)
                    ->paginate(8);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }


    ////////////////////////////////////////////////////////////////start for women here

    public function sharee(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',3)
                    ->paginate(8);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }

    public function jewellery(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',9)
                    ->paginate(10);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }

     public function threepice(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',2)
                    ->paginate(10);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }

    public function ladiesbags(){

        
        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.caregoryId',10)
                    ->paginate(10);
        
                    
                    // return response()->json($formen);

           
       return view('frontView.home.products',['products'=>$products]);
  

        // return view('frontView.home.products');
    }


      public function contact()
    {
        return view('frontView.home.contactus');
    }


}
