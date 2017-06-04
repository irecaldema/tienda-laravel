<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Order;

class StoreController extends Controller
{
    public function index(){
    	$products = Product::all();
    	return view('store/index', compact('products'));
    }

    public function show($slug){
    	$product = Product::where('slug', $slug)->first();
    	return view('store/show', compact('product'));
    }

    public function orders(){
    	// dd(Auth::user());
    	// echo Auth::user()->id;
    	$orders = Order::where('user_id', Auth::user()->id);
    	// dd($orders);
    	if($orders)
    		return view('admin.order.index', compact('orders'));
    	else
    		return view('admin.order.index');
    }

}
