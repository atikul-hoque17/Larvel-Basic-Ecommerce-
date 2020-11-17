<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Category;
use Validator;
use Redirect;
use DB;


class CategoryController extends Controller
{
    //

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function index(){
		return view('admin.category.addcategory');	
	}

	 public function save(Request $request){     

	 		// return response()->json($request);

   
		    $validatedData = $request->validate([
		        'category_name' => 'required',
		        'shortdescription' => 'required',
		    ]);


	      $categoryEntry= new Category();
	      $categoryEntry->categoryName =$request->category_name;
	      $categoryEntry->shortDescription =$request->shortdescription;
	      $categoryEntry->publicationStatus =$request->publicationstatus;      
	      $categoryEntry->save();

	     	$notification=array(
                'messege'=>'Successfully Category Inserted',
                'alert-type'=>'success'
                 );
             return Redirect('category/manage')->with($notification);

	    } 	

	    public function manage(){		

		    	$categories = Category::paginate(10);
		    	// return response()->json($categories);
		    	// //$categories = DB::table('categories', '>', 100)->paginate(15);
		    	// $categories = DB::table('categories')->paginate(10);
		    	 return view('admin.category.categorymanage',['category'=> $categories]);
		    	// return View::make('admin.category.categorymanage')->with('category', $categories);
		    	//return view('admin.category.categorymanage')->with( ['category' => $categories] );
		  
		}

		public function edit($id){

			//echo $id;
			// query builder
			// $user = DB::table('categories')->where('id', $id)->first();
			// echo $user->categoryName;

			
			

			$category = Category::where('id', $id)->firstOrFail();
		   //return response()->json($category);
			// echo $category->categoryName;
			return view('admin.category.editcategory')->with(compact('category'));
			// return View::make('admin.category.editcategry')->with(compact('category', 'topics', 'message'))

		}


		 public function update(Request $request){

		 	// return response()->json($request);

		    $category = Category::find($request->updateid);
		    $category->categoryName =$request->name;
		    $category->shortDescription =$request->shortdescription;
		    $category->publicationStatus =$request->publicationstatus;
		    $category->save();
		   	
		   	$notification=array(
                'messege'=>'Category Updated Successfully',
                'alert-type'=>'success'
                 );
             return Redirect('category/manage')->with($notification);


		   }

		   public function delete($id){



		   	// $category = Category::find($id);
		   	// echo $category->categoryName;
		   	$category = Category::findOrFail(1);

			$category = Category::where('id', $id)->firstOrFail();
			echo $category->categoryName;
			$category-> delete();
				$notification=array(
                'messege'=>'Category Deleted Successfully',
                'alert-type'=>'success'
                 );
             return Redirect('category/manage')->with($notification);

		   }


}
