<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Auth::user()->products;

        $carts = Auth::user()->products;
        $total=0;
         foreach ($carts as $cart){
            $total += $cart->price * $cart->pivot->count;
        }
        return view('checkout')->with('carts' , $carts)->with('total' ,$total);
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
            // dd(Auth::user()->products());
    //    $product = Auth::user()->products()->where('product_id' , $request->product_id)->first();
        $cart = Cart::where('user_id',Auth::id())->where('product_id',$request->product_id)->first();
        if($cart) {
            // dd($product_user['count']);
            $cart->count++;
            $cart->save();
        }
        else{
            // dd("null");
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->user_id=Auth::id();
            $cart->save();
        }
        return redirect()->back();
        // if($product){
        //     $cart = Cart::find($product->Pivot->id);
        //     $cart->count = ++$cart->count;
        //     $cart->save();
        // }else{
        //     $cart = new Cart();
        //     $cart->product_id=$request->product_id;
        //     $cart->user_id=Auth::id();
        //     $cart->count++;
        //     $cart->save();
        //     return redirect('/home');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
