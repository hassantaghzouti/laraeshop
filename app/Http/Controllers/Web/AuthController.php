<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
       
        $validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6'
        ]);
            
        if (Auth::attempt($validator)) {
            //dd(auth()->user());
            if(auth()->user()->is_admin==1){
                return redirect()->route('admin.dash');
            }elseif(auth()->user()->is_admin==0){
                return redirect()->route('admin.dash');
            }else{
                return abort(304);
            }
            //return redirect()->route('dashboard');
        }
    }
}
