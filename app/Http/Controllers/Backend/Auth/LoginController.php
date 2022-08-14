<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
class LoginController extends Controller
{
    public function index(){
        return view('backend.auth.login');
    }


    public function login(Request $request){


//        return $request->all();

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:10',
        ]);

        $admin = User::where('email' , '=', $request->email)->first();
        if ($admin){
            if (Hash::check($request->password,$admin->password)){
                $request->session()->put('adminId',$admin->id);
                return redirect('/dashboard');
            }else{
                return redirect()->back()->with('error','Password not match ');
            }

            //return redirect()->back()->with('success','We got your gmail '.$request->email);
        }else{
            return redirect()->back()->with('error','oh sorry we not found any '.$request->email . 'in our database');
        }

    }


    public function logout(){
        if (Session::has('adminId')){
            Session::pull('adminId');
            return redirect()->route('admin.login');
        }
    }
}
