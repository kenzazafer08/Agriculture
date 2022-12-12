<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class test extends Controller
{
public function culture(){
    $cultures = DB::table('culture')->select('type_culture')->get();
    return view('inscription', compact('cultures')); 
    
 }
 
 public function index(Request $user ){
   if(session()->get('user')){
   $user=session('user');
   $i=0;
   $j=0;
   $users = DB::select('select * from investisseur where username = ?', [$user]);
   foreach($users  as $u){
   $Notification = DB::select('select * from not_inv WHERE investisseur = ?  and validation = ?',[$u->cin,0]);
   foreach($Notification as $Notification)
   {
         $i++;
   }
   $Nmessage = DB::select('select * from contacter_invest WHERE investisseur1 = ?  and new = ?',[$u->cin,0]);
    foreach($Nmessage as $Nmessage)
    {
      $j++;
    }} return view('home', compact('user','i','j'));
}else
   session()->regenerate();
   return view('index');
}
public function dec(Request $user){
      $user = $user->session()->get('user');
      $status = 'Offline';
      $sql2 =db::update("UPDATE investisseur SET status = '{$status}' WHERE username = ?",[$user]);
            if($sql2){
      session()->flush();
      session()->forget('user');
      session()->regenerate();
      return view('index');
            }else {
                  session()->flush();
                  session()->forget('user');
                  session()->regenerate();
                  return view('index');}
}
public function check($user ){
      if(session()->get('user')){
          
           
              $invests=DB::update('UPDATE not_inv SET validation = 1  WHERE id_not = ?',[$user]);
              if($invests){
                  session()->forget('invest');
              return back();
                                  
                 }}else back();
          }
 public function chat($i,Request  $user ){
      $value = $user->session()->get('user');
      $value=session('user');
      if($value!=Null){
     $invests=DB::select('select * from investisseur where cin = ?',[$i]);
     $inv=DB::select('select * from investisseur where username = ?',[$value]);
     foreach($inv as $inv){
     $message=DB::select('select * from contacter_invest where investisseur1 = ? or investisseur2 = ? ORDER BY date DESC',[$inv->cin,$inv->cin]);
     $update=DB::update('UPDATE contacter_invest SET new = 1 where investisseur1 = ? and investisseur2 = ?  ',[$inv->cin,$i]);

return view('chat',compact('invests','message','value')); }}
     else echo 'hi';
                }
public function sendmsg($p,Request $request){
      if(session()->get('user')){
      $value=session('user');
      $inv=DB::select('select * from investisseur where username = ?',[$value]);
      foreach($inv as $inv){
      $msg =  $request->input('msg');
      $value = array('investisseur1' =>$p ,'investisseur2'=>$inv->cin,'msg'=>$msg);
                       $invests=DB::table('contacter_invest')->insert($value);
                          if($invests){
                              session()->forget('invest');
                          return back();        
                             }}}else back();
                      }
      public function test(Request $user ){
                        if(session()->get('user')){
                              $user=session('user');
                        if($user!=Null){
                              $invests=DB::select('select * from investisseur where username != ?',[$user]);
                              $inv=DB::select('select * from investisseur where username = ?',[$user]);
                              foreach($inv as $inv){
                              $message=DB::select('select * from contacter_invest where investisseur1 = ? or investisseur2 = ? ORDER BY date ASC',[$inv->cin,$inv->cin]);
                              $i=0;
                              $Nmessage = DB::select('select * from contacter_invest WHERE investisseur1 = ?  and new = ?',[$inv->cin,0]);
                               foreach($Nmessage as $Nmessage)
                               {
                                 $i++;
                               } return view('test',compact('invests','message','inv','i','Nmessage'));
                              }
                         }else
                        session()->regenerate();
                        return view('index');
                     }}
}