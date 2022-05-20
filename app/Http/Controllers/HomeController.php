<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){

        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        return view("home.index",[
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);

    }
    public function product($id){

        $data=Product::find($id);
        return view("home.product",[
            'data'=>$data
        ]);

    }

    public function aboutus(){

        return view("home.about");
    }
    public function logincheck(Request $request){

        if ($request -> isMethod('post')){

            $credentials = $request ->only('email','password');
            if(Auth::attempt($credentials)){

                $request->session()->regenerate();

                return redirect()->intended('adminhome');
            }

            return back()->withErrors([

                'email'=>'The provided credentials do not match our records'
            ]);

        }
        else{

            return view('admin_login');
        }

    }
    public function login(){

        return view('admin.login');
    }


}
