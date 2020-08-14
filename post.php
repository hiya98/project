<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\hiya;
use App\Providers\AuthServiceProvider;
use Hash;
use Illuminate\Support\Facades\Auth;
class post extends Controller
{
    public function loginsubmit(Request $request)
    {

        $email = $request->input('Username');
        $Password = $request->input('Password');


         if(\App\create::where('Username', '=', $email)->first())
         {

        if ( \App\create::where('Password','=',$Password)) {
            return view('/user');
        }}

        else
        return response()->json(['success' => false, 'message' => 'Login Fail, pls check password']);
    }
    public function logout(Request $req)
    {

        Auth::logout();
        return redirect('/posts');
    }}



