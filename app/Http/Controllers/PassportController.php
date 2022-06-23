<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PassportController extends Controller
{
    public function register(Request $request){
        $re=Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'F_name'=>['required', 'string', 'max:255'],
            'L_name'=>['required', 'string', 'max:255'],
            'phone_n'=>['required', 'numeric'],
            'B_date'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if($re->fails()){
            $error=$re->errors()    ;

        return response()->json($error,401);
}else{

  $user=User::create([
        'name' => $request->name,
        'F_name'=> $request->F_name,
        'L_name'=> $request->L_name,
        'phone_n'=> $request->phone_n,
        'B_date'=> $request->B_date,
        'email' => $request->email,
        'password' =>bcrypt($request->password),
    ]);

    $token=$user->createToken('APPLICATION')->accessToken;
    return response()->json(['token'=>$token,'message'=>'success'],200);
    
}

    }
public function login(Request $request ){
    $credentials=[
        'email'=> $request->email,
        'password' =>$request->password,
    ];
    if(auth::attempt($credentials))
    {

        $token=auth::user()->createToken('APPLICATION')->accessToken;
        return response()->json(['token'=>$token,'message'=>'success'],200);
        
    }
    else{
        return response()->json(['message'=>'Password or Email  incorrect'],401);

    }
}
public function details(){
    return response()->json(['user'=>auth()->user()],200);

}

}
