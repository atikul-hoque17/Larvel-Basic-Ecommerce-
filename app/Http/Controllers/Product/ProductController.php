<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\c;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        
        //
        $categories = Category::get();
        // return response()->json($categories);
        return view('admin.product.addproduct')->with( ['category' => $categories] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
                'product_name' => 'required',
                'caregoryId' => 'required',
                'price' => 'required',
                'qty' => 'required',
                'description' => 'required',

            ]);

        //return response()->json($request);

        $product= new product();

        // $picInfo=$request->file('picture'); 
        // $picName=$picInfo->getClientOriginalName();
        // $folder="productImage/";


       $product->productName=$request->product_name;
       $product->caregoryId=$request->caregoryId;
       $product->price=$request->price;
       $product->qty=$request->qty;
       $product->Description=$request->description;
       $product->pic="productImage/no_image.png";       
       $product->publicationStatus=$request->publicationstatus;
       $product->prostatus=$request->pstatus;
 
      $product->save();

      if( $picInfo=$request->file('picture')){

     $lastID=$product->id;
      $picInfo=$request->file('picture');     
      $picName=$lastID.$picInfo->getClientOriginalName();
    //  $picName=$picInfo->getClientOriginalName();
      $folder="public/productImage/";
      $picInfo->move($folder,$picName);


  
      
      $savefolder="productImage/";
      $picUrl=$savefolder.$picName;      
      $productPic= product::find($lastID);
      $productPic->pic=$picUrl;
      $productPic->save();

      }

           

      $notification=array(
                'messege'=>'Successfully Product Inserted',
                'alert-type'=>'success'
                 );
             return Redirect('product/add')->with($notification);



    }

    public function manage(){

        $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')

                    ->paginate(10);

                    // return response()->json($products);

           
            return view('admin.product.allproduct',['products'=>$products]);
    }


     public function edit($id )
    {
        //
        // echo $id;

        // $products=DB::table('products')
        //             ->join('categories','categories.id','=','caregoryId')
        //             ->select('products.*','categories.categoryName as catName')
        //             ->where('product.id',$id)
        //             ->paginate(6);

         $producteditbyid = Product::where('id',$id)->first();
         $categories= Category::where('publicationStatus',1)->get();
                    // return response()->json($productsbyId);

           
        // return view('admin.product.editproduct',['products'=>$products]);
        return view('admin.product.editproduct',['producteditbyid'=>$producteditbyid,'categories'=>$categories]);


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $productsbyId = Product::where('id',$id)->first();
        // return response()->json($productsbyId);
        return view('admin.product.viewproduct')->with(compact('productsbyId'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        // return response()->json($request);

        $updatedID=$request->updateid;

        $productPic=product::where('id',$request->updateid)->first();
        $exist_pic='public/'.$productPic->pic;
       // return response()->json($exist_pic);



         $picInfo=$request->file('picture');   
         
         if($picInfo){

            if(file_exists($exist_pic)){           
             unlink($exist_pic);
            }

          $picName=$updatedID.$picInfo->getClientOriginalName();

            $path="public/productImage/";
            $picUrl=$path.$picName;
            $picInfo->move($path,$picName);           


           }else{
             $picUrl=$exist_pic;

         }

         $savepath="productImage/";
         $savepicUrl=$savepath.$picName;

        $updateproduct=product::find($updatedID);

        $updateproduct->productName=$request->product_name;
        $updateproduct->caregoryId=$request->caregoryId;
        $updateproduct->price=$request->price;
        $updateproduct->qty=$request->qty;
        $updateproduct->Description=$request->description;
        $updateproduct->pic=$savepicUrl;
        $updateproduct->publicationStatus=$request->publicationstatus;
        $updateproduct->prostatus=$request->pstatus;

        $updateproduct->save();

         $notification=array(
                'messege'=>'Successfully Product Updated',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    

    // public function destroy($id)
    // {
    //     //
       

    //         $product = Product::where('id', $id)->firstOrFail();
    //         echo $product->qty;
    //         $product-> delete();
    //             $notification=array(
    //             'messege'=>'Product Deleted Successfully',
    //             'alert-type'=>'success'
    //              );
    //          return Redirect()->back()->with($notification);
    // }

   
        function removedata(Request $request)
        {

            //return response()->json($request);

             $product = Product::where('id', $request->input('id'))->firstOrFail();
            
            $exist_pic='public/'.$product->pic;
            if(file_exists($exist_pic)){           
             unlink($exist_pic);
            }

               if($product->delete())
                   
                    {
                        echo 'Data Deleted Successfully';
                    }

        }


}
