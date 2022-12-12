<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class annonce extends Controller
{
    public function info_annonce(Request $request){
        session()->flush();
        session()->forget('user');
        session()->regenerate();
        $annonces = DB::select('select * from annonces order by id_annonce desc');
        $images = DB::select('select * from image');
        return view('index',compact('annonces', 'images',['posts'=>[]]));
    }

}