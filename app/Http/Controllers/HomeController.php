<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){

        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        $setting=Setting::first();
        return view("home.index",[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);

    }
    public function about(){

        $setting=Setting::first();
        return view("home.about",[
            'setting'=>$setting,

        ]);

    }
    public function contact(){

        $setting=Setting::first();
        return view("home.contact",[
            'setting'=>$setting,

        ]);
    }

    public function faq(){

        $setting=Setting::first();
        $datalist=Faq::all();
        return view("home.faq",[
            'setting'=>$setting,
            'datalist'=>$datalist

        ]);
    }

    public function storeMessage(Request $request){

        //dd($request);
        $data= new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();

        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank you.');

    }
    public function references(){


        $setting=Setting::first();
        return view("home.references",[
            'setting'=>$setting,

        ]);


    }
    public function product($id){

        $data=Product::find($id);
        return view("home.product",[
            'data'=>$data
        ]);

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
