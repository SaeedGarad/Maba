<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/products')->with('products' , Product::get());
    }

    public function show($id)
    {
        return view('/product')->with('product' , Product::find($id));
    }

    public function search(Request $request)
    {
       $products = Product::where('name' , 'like' , '%'. $request->name . '%')
       ->orWhere('id' , $request->name)->get();
       return view('_Products')->with('products' , $products);
    }

    public function checkcart()
    {
       $product = Cart::where('user_id',Auth::id())->get();

        return view('CheckCart')->with('products' , $product);
        // return 150;
    }

}
