<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Auth;

class profile extends Controller
{
public function profil(Request  $user){
    $value = $user->session()->get('user');
    $value=session('user');
    if($value==Null){
        session()->regenerate();
        return view('index');
    }
    $cultures = DB::table('culture')->select('type_culture')->get();
    
    $id=DB::select('select * from `investisseur` WHERE `username` = ?',[$value]);
    $collection = new \Illuminate\Database\Eloquent\Collection;
    foreach($id as $user){
       $c=DB::select('select `id_culture` from `culture_investisseur` WHERE `cin` = ?',[$user->cin]);
       $Notification = DB::select('select * from not_inv WHERE investisseur = ?  ORDER BY date DESC',[$user->cin]);
       
       foreach($c as $c){
       $type=DB::select('select `type_culture` from `culture` WHERE `id_culture` = ?',[$c->id_culture]);

       $collection ->push( $type);
        }return view('profile', compact('user','cultures','collection','Notification'));   }       
}

}