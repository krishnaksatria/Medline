<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // public function add(Request $request, $id)
    // {
    //     $this->validate($request,[
    //         'qty'=>'integer|required|gt:0',
    //     ]);
    //     $cari= DB::table('user_carts')
    //         ->where('IDUser', Auth::user()->id)
    //         ->where('IDDetailCategory', $id)->first();
    //     $uc= new UserCarts;
    //     if($cari===null)
    //     {
    //         $uc->Quantity=request('qty');
    //         $uc->IDDetailCategory=$id;
    //         $uc->IDUser=Auth::user()->id;
    //         $uc->save();
    //     }
    //     else
    //     {
    //         $uc->Quantity=request('qty')+$cari->Quantity; 
    //         DB::table('user_carts')->where('id', $cari->id)
    //             ->update([
    //                 'Quantity'=>$request->qty+$cari->Quantity,
    //             ]);
    //     }
    //     return redirect()->route('home');
    // }
}
