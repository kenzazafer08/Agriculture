<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use app\Http\Controllers\Auth\Session;

class login extends Controller
{
    
    function connection(Request $request){
        $status = 'Offline';
        $name = $request->input('username');
        $pass=$request->input('pass');
        $investisseur = DB::table('investisseur')
        ->where('username', 'LIKE', $name)
        ->first();

        if(Hash::check($pass, $investisseur->password)){
            $pass=$investisseur->password;
        }

        $users = DB::select('select * from investisseur where username = ? and password= ?', [$name,$pass]);
        if($users){ 
            $status = 'Online';
            $sql2 =db::update("UPDATE investisseur SET status = '{$status}' WHERE username = ?",[$name]);
            session_start();
            session(['user' => $name]);
            $request=session('user');
            return redirect('/');       
        }
            else return back()->with('fail','Username ou Mot de passe Incorrect');
            
    }
}
