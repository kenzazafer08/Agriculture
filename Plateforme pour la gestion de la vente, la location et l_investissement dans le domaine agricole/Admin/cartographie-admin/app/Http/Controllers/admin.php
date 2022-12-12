<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use IlluminateSupportCarbon;
use Illuminate\Http\Request;
use Illuminate\Http\Partner;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    function connection(Request $request){
       
        $name = $request->input('username');
        $pass=$request->input('password');
        $users = DB::select('select * from admin where username = ? and password= ?', [$name,$pass]);
        if($users){
            session_start();
            session(['user' => $name]);
            $request=session('user');
            return redirect('/index');
        }
            else return back()->with('fail','Username ou Mot de passe Incorrect');
            
    }
    public function Déconnecter(){
        session()->flush();
        session()->forget('user');
        session()->regenerate();
        return redirect('/');
  }
  public function index(Request $user ){
    $today = Carbon::today();
    if(session()->get('user')){
    $T=db::select('SELECT id_transaction FROM Transaction WHERE date = ?',[$today]);
    $O=db::select('SELECT cin FROM investisseur WHERE status = ?',['Active now']);
    $i=0;
    $j=0;
    foreach($O as $NO){
        $j++;
    }
    foreach($T as $NT){
        $i++;
    }
    $user=session('user');
         return view('dashboard', compact('user','i','j'));
         
    }else
    session()->regenerate();
    return view('login-admin');
 }
 public function users(Request $user ){
    if(session()->get('user')){
    $user=session('user');
    $invests=DB::SELECT('select * from investisseur');
    if($invests){
return view('users', compact('user','invests'));}
}else
    session()->regenerate();
    return redirect('/index');
 }
 public function farmers(Request $user ){
    if(session()->get('user')){
    $user=session('user');
    $invests=DB::SELECT('select * from agriculteur');
    if($invests){
return view('agriculteur', compact('user','invests'));}
}else
    session()->regenerate();
    return redirect('/index');
 }
 
public function NA(Request $user ){
            if(session()->get('user')){
            $user=session('user');
            $annonces = DB::select('select * from annonces where  validation = ?',[0]);
            
            $images = DB::select('select * from image');
           
        return view('Nouveau-annonce', compact('user','annonces',
    'images'));
        }else
            session()->regenerate();
            return redirect('/index');
         }
public function VA(Request $user ){
            if(session()->get('user')){
            $user=session('user');
            $annonces = DB::select('select * from annonces where  validation = ?',[1]);
            $images = DB::select('select * from image');
        return view('annonce', compact('user','annonces','images'));
        }else
            session()->regenerate();
            return redirect('/index');
         }
public function check($user ){
    if(session()->get('user')){
        $admin=session('user');
            
            $agr=DB::select('select * from annonces WHERE id_annonce = ?',[$user]);
            
            foreach($agr as $agr){
                $contenu='Votre annonce '.$agr->nom. ' est valider';
            $v=array('agriculteur'=>$agr->id_agri,'contenu'=>$contenu);
            $queryC=DB::table('notification')->insert($v);}$invests=DB::update('UPDATE annonces SET validation = 1 , admin = ? WHERE id_annonce = ?',[$admin,$user]);
            if($invests){
                session()->forget('invest');
            return redirect('/NA');
            echo $user;                       
               }}else redirect('/NA');
        }
public function A(Request $user ){
            if(session()->get('user')){
            $user=session('user');
            $Ts = DB::select('select * from Transactions where  type = ?',['Achat']);
        return view('Transaction', compact('user','Ts'));
        }else
                    session()->regenerate();
            return redirect('/index');
         }
public function L(Request $user ){
            if(session()->get('user')){
                $user=session('user');
                $Ts = DB::select('select * from Transactions where  type = ?',['Location']);
            return view('Transaction', compact('user','Ts'));
        }else
            session()->regenerate();
            return redirect('/index');
         }
public function I(Request $user ){
            if(session()->get('user')){
                $user=session('user');
                $Ts = DB::select('select * from Transactions where  type = ?',['Investissement']);
            return view('Transaction', compact('user','Ts'));
        }else
            session()->regenerate();
            return redirect('/index');
         }
public function delete($user ){
            if(session()->get('user')){
                $admin=session('user');
                    
                    $agr=DB::select('select * from annonces WHERE id_annonce = ?',[$user]);
                    foreach($agr as $agr){
                        $contenu='Votre annonce '.$agr->nom. ' n\'est pas valider';
                    $v=array('agriculteur'=>$agr->id_agri,'contenu'=>$contenu);
                    $queryC=DB::table('notification')->insert($v);}$invests=DB::delete('delete from annonce  WHERE id_annonce = ?',[$user]);
                    if($invests){
                        session()->forget('invest');
                    return redirect('/NA');
                    echo $user;                       
                       }}else redirect('/NA');
                }
    public function send($user,Request $request ){
        if(session()->get('user')){
            $not = $request->input('not');
            $v=array('investisseur'=>$user,'contenu'=>$not,'date'=>date('y-m-d'));
            $queryC=DB::table('not_inv')->insert($v);
            if($queryC){
            return redirect('/users');
            echo $user;                       
            }}else redirect('/users');
                                }

public function sendA($user,Request $request ){
        if(session()->get('user')){
        $not = $request->input('not');
        $v=array('agriculteur'=>$user,'contenu'=>$not);
                            $queryC=DB::table('notification')->insert($v);
                            if($queryC){
                            return redirect('/farmers');
                            echo $user;                       
                            }}else redirect('/farmers');
                                                }

}
