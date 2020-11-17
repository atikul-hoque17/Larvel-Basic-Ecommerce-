<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontView.home.homecontent');
// });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact/us', 'FrontendView@contact')->name('contact.us');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');



Route::get('/','FrontendView@index');
Route::get('/product/view/product/{id}', 'FrontendView@show');
Route::get('/new/collections/','FrontendView@newcollection')->name("newcollection");
Route::get('/top/sales/','FrontendView@topsale')->name("topsale");
Route::get('/discount/products/','FrontendView@discount')->name("discount");

/// for mens item 
Route::get('/mens/tshirt/','FrontendView@tshirt')->name("tshirt");
Route::get('/mens/wallet/','FrontendView@wallet')->name("wallet");
Route::get('/mens/footware/','FrontendView@footware')->name("footware");
Route::get('/mens/watch/','FrontendView@watch')->name("watch");


/// for woman item 

Route::get('/womans/sharee/','FrontendView@sharee')->name("sharee");
Route::get('/womans/jewllery/','FrontendView@jewellery')->name("jewellery");
Route::get('/womans/threepice/','FrontendView@threepice')->name("threepice");
Route::get('/womans/ladiesbags/','FrontendView@ladiesbags')->name("ladiesbags");




Route::group(['prefix'=>'admin'],function(){

	Route::get('/dashboard', 'AdminController@index')->name('admin.home');
    Route::get('/', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/admin-password-change', 'AdminController@passwordchnage')->name('password.change');
	Route::post('/password/update', 'AdminController@passupdate')->name('password.update');

});


// for category information
Route::get('/category/add', 'Category\CategoryController@index')->name('add.category');
Route::post('/category/save', 'Category\CategoryController@save')->name('save.category');
Route::get('/category/manage', 'Category\CategoryController@manage')->name('category.manage');
Route::get('/category/edit/{id}', 'Category\CategoryController@edit');
Route::post('/category/update', 'Category\CategoryController@update')->name('password.update');
Route::get('/category/delete/{id}', 'Category\CategoryController@delete');



// for product information

Route::get('/product/add', 'Product\ProductController@index')->name('add.products');
Route::post('/product/save', 'Product\ProductController@store')->name('save.product');
Route::get('/product/manage', 'Product\ProductController@manage')->name('product.manage');
Route::get('/product/edit/{id}', 'Product\ProductController@edit');
Route::post('/product/update', 'Product\ProductController@update');
Route::get('/products/view/product/{id}', 'Product\ProductController@show');
// Route::get('/products/delete/{id}', 'Product\ProductController@destroy');
Route::get('/product/remove', 'Product\ProductController@removedata')->name('product.remove');

// Route::get('/admin-password-change', 'AdminController@passwordchnage')->name('password.change');
// Route::post('/password/update', 'AdminController@passupdate')->name('password.update');







// // for product  addcart
Route::get('/view/cart/', 'CartController@cartlist')->name('view.cart');
Route::get('/add/cart/{id}', 'CartController@addcartbyID');
Route::post('/create/order', 'CartController@createorder')->name('create.order');
Route::get('/add/cart', 'CartController@addcart')->name('add.cart');
Route::get('/remove/cart/item', 'CartController@removeitem')->name('remove.item');


// // for product  cart and orderlist for  user

Route::get('/clean/cart/', 'CartController@emptyCart')->name('empty.cart');
Route::PUT('/update/cart/', 'CartController@updatecart')->name('cart.update');
Route::post('/cart/store', 'CartController@stor_order')->name('cart.store');
Route::get('/order/done', 'CartController@orderinfo');
Route::get('/my/order/', 'CartController@orderlist')->name('order.list');
Route::get('/order/details/order/number/{id}', 'CartController@orderdetails');

// Route::get('/clean/cart/', 'CartController@cleancart');


/// for order information via admin

Route::get('/order/list/', 'Order\OrderController@index')->name('adminorder.list');
Route::get('/order/details/number/{id}', 'Order\OrderController@orderdetails');
Route::get('/order/details/', 'Order\OrderController@addprocess')->name('create.process');
Route::get('/order/details/shipped/', 'Order\OrderController@shipped')->name('create.shipped');
Route::get('/order/details/delivered/', 'Order\OrderController@delivered')->name('create.delivered');
