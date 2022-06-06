<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Label;

class UserController extends Controller
{
    //
    public function regViewPage(){
        $roles= Role::all();
        return view ('registration',compact('roles'));
        
    }

    public function loginViewPage(){
        return view('login');
    }

    public function userRegistration(Request $request){
        User::create([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'username'=>$request->input('username'),
            'password'=>Hash::make($request->input('password'))
        ]);
        return redirect()->route('user.login.page')->with(['data'=>'Account created successfully! Please login to continue.']);
    }

    public function login(Request $request){
        $user = User::all()->where('username', $request->input('username'))->first();
        if($user == null){
            return redirect()->back()->with(['data'=> 'No user found!']);
        }
        if(!Hash::check($request->input('password'),$user->password)){
            return redirect()->back()->with(['data'=>'Incorrect password!']);
        }

        $request->session()->put('id',$user->id);

        return redirect()->route('home');
    }

    public function logOut(){
        session()->flush('id');
        return redirect()->route('user.login.page');
    }
	
	public function forgotpass(){
		return view('forgot');
	}
}
