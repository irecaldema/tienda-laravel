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

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

// Category dependency injection
Route::bind('category', function($category){
    return App\Category::find($category);
});

Route::bind('user', function($user){
    return App\User::find($user);
});

Route::get('/', [
	'as'	=> 'home',
	'uses'	=> 'StoreController@index'
]);

Route::get('/home', 'HomeController@index');

Route::get('/product/{slug}', [
	'as'	=> 'product-detail',
	'uses'	=> 'StoreController@show'
]);

// Route::get('orders', [
// 	'as' => 'orders',
// 	'uses' => 'StoreController@orders'
// ])->middleware('auth');

Route::get('/orders', [
	'as' => 'orders',
	'uses' => 'StoreController@orders'
])->middleware('auth');

Auth::routes();

Route::get('/logout', function(){
	Auth::logout();
    return redirect('/');
});

// Carrito 
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
])->middleware('auth');

Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
])->middleware('auth');

// Paypal

// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));

// ADMIN -------------
Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function()
{
	Route::get('/admin', function(){
		echo "hola";
		// return $redirectTo = '/home';
	});

	Route::get('home', function(){
		return view('admin/home');
	});
	
	Route::resource('category', 'CategoryController');
	Route::resource('product', 'ProductController');
	Route::resource('user', 'UserController');

	Route::get('orders', [
		'as' => 'admin/order/index',
		'uses' => 'OrderController@index'
	]);

	Route::post('order/get-items', [
	    'as' => 'admin/order/getItems',
	    'uses' => 'OrderController@getItems'
	]);
	Route::get('order/{id}', [
	    'as' => 'admin/order/destroy',
	    'uses' => 'OrderController@destroy'
	]);
});

