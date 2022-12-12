<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Hash;

class inscription extends Controller
{
   function test(Request $request){
    $request->validate([
    'username'=>'Unique:investisseur',
    'pass'=>'min:8|max:12|required_with:pass_conf|same:pass_conf',
    'CIN'=>'Unique:investisseur',
    'pass_conf'=>'min:8|max:12'
    ]);
    

    $input = $request->all();
    $CIN = $request->input('CIN');
    if($image =$request->File('image')){
            $destinationPath = 'image/';
            $profileImage = date('registre') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    }
        foreach(  ($input['culture']) as $culture ){ 
        $id=DB::select('select `id_culture` from `culture` WHERE `type_culture` = ?',[$culture]);
        if($id==NULL){
            $queryC=DB::insert('insert into `culture`(`type_culture`) VALUES ( ?)', [ $culture]);
            if($queryC){
                $id=DB::select('select `id_culture` from `culture` WHERE `type_culture` = ?',[$culture]);
                foreach($id as $i){
                    $value = array('id_culture' => ($i->id_culture),'cin'=>$CIN);
                        $queryC=DB::table('culture_investisseur')->insert($value);
                            }
            }
        }else
        foreach($id as $i){
    $value = array('id_culture' => ($i->id_culture),'cin'=>$CIN);
    $queryC=DB::table('culture_investisseur')->insert($value);
        }}
        
    $hashedpass = bcrypt($input['pass']);

    $values = array('CIN' => $input['CIN'],'nom' => $input['name'],'prenom' => $input['prenom'],'date_naissance' => $input['DN'],'ville' => $input['ville'],'region' => $input['region'],'username' => $input['username'],'password' => $hashedpass,'registre_commercial' => $input['image'] ,'tel' => $input['tel']);
    $query=DB::table('investisseur')->insert ($values);
       if(($query)){
           return back()->with('succes','Vous avez inscrie avec succès ');
       }else return back()->with('fail','Ressayer de inscrir');
   
}
}
