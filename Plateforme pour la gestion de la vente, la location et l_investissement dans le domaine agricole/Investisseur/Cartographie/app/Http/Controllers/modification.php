<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Parser\Reader;

class modification  extends Controller

{ 
    function test(Request $request){
        $request->validate([
        'pass'=>'min:8|max:12|required_with:pass_conf|same:pass_conf',
        'pass_conf'=>'min:8|max:12'
        ]);
    }
    public function change_pass(Request  $request){
        $pass1 = $request->session()->get('user');
        $pass =  $request->input('pass');
        $users = DB::select('select * from `investisseur` where `username` = ? ', [$pass1 ]);
        if($users!=NULL){
            return back()->with('succes','Le mot de passe est changer');
    }else  return back()->with('fail','Le mot de pass incorrect');
    }
   public function culture(Request $request){
    $value = $request->session()->get('user');
    $value=session('user');
       foreach(  ($request->input('culture')) as $culture ){ 
       $in=DB::select('select `cin`  from `investisseur` WHERE `username` = ?',[$value]); 
       foreach($in as $in){
       $id=DB::select('select `id_culture` from `culture` WHERE `type_culture` = ?',[$culture]);
       if($id==NULL){
        $queryC=DB::insert('insert into `culture`(`type_culture`) VALUES ( ?)', [ $culture]);
        if($queryC){
            $id=DB::select('select `id_culture` from `culture` WHERE `type_culture` = ?',[$culture]);
            foreach($id as $i){
                $value = array('id_culture' => ($i->id_culture),'cin'=>$in->cin);
                    $queryC=DB::table('culture_investisseur')->insert($value);
                        }return back()->with('succes1','Cultures ajoutées');
        }
    }else
        foreach($id as $i){
            $que=DB::select('select * from `culture_investisseur` WHERE `id_culture` = ? and `cin`=?',[$i->id_culture,$in->cin]);  
            if($que==NULL) {     
$value = array('id_culture' => ($i->id_culture),'cin'=>($in->cin));
$queryC=DB::table('culture_investisseur')->insert($value);
    if($queryC){
        return back()->with('succes1','Cultures ajoutées');
        }}return back()->with('succes1','Cultures ajoutées');}}
   }}
    public function modification(Request $request){
        $value = $request->session()->get('user');
        $value=session('user');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $dn = $request->input('DN');
        $tel = $request->input('tel');
        $CIN = $request->input('cin');
        $visible = $request->input('visible');
        $var=0;
        if($visible=="Oui")$var=1;
        else$var=0;
        $in=DB::select('select * from `investisseur` WHERE `username` = ?',[$value]); 
            if($in!=NULL){
                $affected = DB::update('UPDATE `investisseur`
                SET `nom` = ? ,`prenom` = ?,`date_naissance` = ?,`tel` = ?,`cin` = ?, `visible` = ?
                WHERE `username` = ? ',[$nom,$prenom,$dn,$tel,$CIN,$var,$value]);
                if($affected){
                    return back();}else  return back()->with('fail1','Erreur!');
            }else  return back()->with('fail1','Erreur!');
    }
}
