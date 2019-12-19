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

Route::get('/', function () {
    return view('welcome');
});


Route::get('category-tree-view','CategoryController@manageCategory');

Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);

Route::resource('admin/banners', 'Admin\\bannersController');
/*
Route::resource('admin/categories', 'Admin\\categoriesController');
Route::resource('admin/categories', 'Admin\\categoriesController');
Route::resource('admin/categories', 'Admin\\categoriesController');
Route::resource('admin/categories', 'Admin\\categoriesController');

*/


Route::get('test',function(){

$categories = DB::table('categories as c1')
    ->leftJoin('categories as c2','c2.parent_id','=','c1.id')
    ->leftJoin('categories as c3','c3.parent_id','=','c2.id')
    ->leftJoin('categories as c4','c4.parent_id','=','c3.id')
    ->select('c1.id as c1_id','c1.title as c1_name','c2.id as c2_id','c2.title as c2_name','c3.id as c3_id','c3.title as c3_name','c4.id  as c4_id','c4.title as c4_name')
    ->where('c1.parent_id','=',0)
    ->get();
    return $categories;
});

Route::get('index','CategoryController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('lang/{locale}', 'HomeController@lang');

Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::resource('admin/addresses', 'Admin\\AddressesController');
Route::resource('admin/addresses', 'Admin\\AddressesController');
Route::resource('admin/addresses', 'Admin\\AddressesController');


Route::get('paypal/express-checkout', 'PaypalController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaypalController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaypalController@notify');


Route::post('profileupdate','HomeController@addimage');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
 
Route::get('image','ImageController@index');
Route::post('upload','ImageController@uploadSubmit');

Route::get('pay',function(){
 return view('demo');
});

Route::get('newsletter','NewsletterController@create');
Route::post('newsletter','NewsletterController@store');

use App\Mail\Hello;

 Route::get('testemail', 'HomeController@sendmail');

 Route::get('demo',function(){
 	return view('index');
 });

 Route::get('master',function(){
  return view('demomaster');
 });

 Route::get('count','HomeController@user');

 Route::get('stock/chart','HomeController@chart');
Route::get('/projects/chart/data', 'HomeController@projectsChartData');

Route::redirect('/here', '/there', 301);

Route::domain('{account}.127.0.0.1:9000')->group(function () {
    Route::get('demourl', function ($account) {
    	return "accounturl".$account;
        //
    });
});
Route::resource('admin/posts', 'Admin\\PostsController');

Route::get('productinfo','ProductController@index');

Route::get('orderinfo','OrderdetailController@index');

Route::get('orders',function(){
 return view('orderinfo');
});
Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/address', 'Admin\\addressController');
Route::resource('admin/coupons', 'Admin\\couponsController');
Route::resource('admin/coupons', 'Admin\\couponsController');
Route::resource('admin/coupons', 'Admin\\couponsController');
Route::resource('admin/coupons', 'Admin\\couponsController');
Route::resource('admin/configuration', 'Admin\\configurationController');
Route::resource('admin/demos', 'Admin\\demosController');
Route::resource('admin/demos', 'Admin\\demosController');

Route::get('awsupload',function(){
 return view('s3image');
});
Route::get('/images', 'ImageController@getImages')->name('images');
Route::post('/upload', 'ImageController@imageupload')->name('uploadfile');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('menu',function(){

return view('menu');
});

Route::get('menus','AdminmenuController@index');

Route::post('menu/add','AdminmenuController@store');

Route::get('menu/submenu','AdminmenuController@addSubMenu');

Route::post('menu/additem','AdminmenuController@storeSubMenu');

Route::get('listmenu','AdminmenuController@demo');

Route::get('category/parent',function(){
return 'demo route';
})->name('category.parent');

Route::get('create/menu','AdminmenuController@createMenu')->name('menu.create');
Route::post('add/menu','AdminmenuController@storeMenu')->name('menu.store');