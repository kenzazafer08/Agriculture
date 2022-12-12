<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getUserDetail($id, $prix, $type,Request $request){
        $user=session('user');
        if($user){
            $partInput=0;
            $cin = DB::table('investisseur')
            ->where('username', $user)
            ->value('cin');
            $part = DB::table('annonce')
            ->where('id_annonce', $id)
            ->value('part_invest');
            $partInput = $request->input('quantity');
            if($part>=$partInput)$part=$part-$partInput;
            $sql2 =db::update("UPDATE annonce SET part_invest = '{$part}' WHERE id_annonce = ?",[$id]);
            $values = array('mantant' => $prix,'annonce' => $id,'type' => $type,'invest' => $cin,'part_invest_transa'=>$partInput);
            $query=DB::table('transaction')->insert($values);
            if($query){
                return back()->with('error_code', 5);
            }        
        }else return view('login');
    }
    public function details($id){
        $annonces = DB::table('annonces')
        ->where('id_annonce', 'LIKE', $id)
        ->get();
        $images = DB::select('select * from image');
        if(session()->get('user')){
        $user=session('user');
        $users = DB::select('select * from investisseur where username = ?', [$user]);
        $i=0;
        $j=0;
        foreach($users as $u){
            
        $Notification = DB::select('select * from not_inv WHERE investisseur = ?  and validation = ?',[$u->cin,0]);
        foreach($Notification as $Notification)
        {
                $i++;
        }
        $Nmessage = DB::select('select * from contacter_invest WHERE investisseur1 = ?  and new = ?',[$u->cin,0]);
            foreach($Nmessage as $Nmessage)
            {
            $j++;
            }}
        return view('home', compact('user','annonces', 'images','i','j'));}
        else return view('index',compact('annonces', 'images'));
    }

    public function search(Request $request){
        $search = $request->input('search');
        $typetransa=$request->input('typetransa');
        $prixMin=$request->input('PrixMin');
        $prixMax=$request->input('PrixMax');

        $vartype="nom";
        if($typetransa=="Louer"){$vartype="location";$prix="prix_loca";}
        else if($typetransa=="Acheter"){$vartype="achat";$prix="prix_achat";}
        else if($typetransa=="Investir"){$vartype="invest";$prix="prix_invest";}

        $annonces = DB::table('annonces')
        ->where('nom', 'LIKE', "%{$search}%")
        ->where($vartype, 'NOT LIKE', NULL)
        ->orderBy('id_annonce', 'desc')
        ->get();
        $images = DB::select('select * from image');
        if(count($annonces) >= 1){
            if(session()->get('user')){
            $user=session('user');
            $users = DB::select('select * from investisseur where username = ?', [$user]);
                $i=0;
                $j=0;
                foreach($users as $u){
                    
                $Notification = DB::select('select * from not_inv WHERE investisseur = ?  and validation = ?',[$u->cin,0]);
                foreach($Notification as $Notification)
                {
                        $i++;
                }
                $Nmessage = DB::select('select * from contacter_invest WHERE investisseur1 = ?  and new = ?',[$u->cin,0]);
                    foreach($Nmessage as $Nmessage)
                    {
                    $j++;
                    }}
            return view('home', compact('user','annonces', 'images','i','j'));}
            else {return view('index',compact('annonces', 'images'));}
        }else return back()->with('error_code', 6);
    }
    public function agri($agri){
        $info_agri = DB::select('select * from agriculteur where nom = ?',[$agri]);
        return view('agri',compact('info_agri'));
    }

    public function details_agri($nom){
        $i=0;
        $j=0;
        $annonces = DB::table('annonces')
        ->where('nom_agri', 'LIKE', $nom)
        ->orderBy('id_annonce', 'desc')
        ->get();
        $images = DB::select('select * from image');
        if(session()->get('user')){
        $user=session('user');
        $users = DB::select('select * from investisseur where username = ?', [$user]);
        foreach($users as $u){
        $Notification = DB::select('select * from not_inv WHERE investisseur = ?  and validation = ?',[$u->cin,0]);
        foreach($Notification as $Notification)
        {
                $i++;
        }
        $Nmessage = DB::select('select * from contacter_invest WHERE investisseur1 = ?  and new = ?',[$u->cin,0]);
            foreach($Nmessage as $Nmessage)
            {
            $j++;
            }}
        return view('home', compact('user','annonces', 'images', 'i','j'));}
        else return view('index',compact('annonces', 'images'));
    }
    public function chat_agri($nom, Request $request){
        if(session()->get('user')){
            $user=session('user');
            $msg =  $request->input('msg');
            $info_agri = DB::select('select * from agriculteur where nom = ?',[$nom]);
            $chat = DB::select('select * from agri_chat where nom = ? and invest = ?',[$nom,$user]);
            $value = array('nom' =>$nom ,'message'=>$msg,'invest'=>$user);
            if($msg!=NULL){
            $invests=DB::table('agri_chat')->insert($value);}
            return view('chat_agri',compact('info_agri','chat'));
            }else return view('login');
    }
}