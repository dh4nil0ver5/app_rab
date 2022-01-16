<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pekerjaan;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function index()
    { 
        return view('welcome');
    }
    public function pekerjaan(){ 
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'"); 
        return view('setting_master.pekerjaan')->with(compact('session'));
    }
    public function sub_pekerjaan(){
        $data = DB::table('tdmasterwork')->where("status", 1)->get();
        $tdpointofwork = DB::table('tdpointofwork')->where("status", 1)->get();
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'"); 
        return view('setting_master.sub_pekerjaan', compact('data','session','tdpointofwork')); 
    }
    public function item_pekerjaan(){ 
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'"); 
        return view('setting_master.item_pekerjaan')->with(compact('session'));
    } 
    public function material($offset=null, $lim=null){  
        $offset=(!$offset?0:$offset);
        $lim=(!$lim?5:$lim);
        $data = DB::select(
            "SELECT 
                a.`id_category` AS name_category,
                b.`id_item`
                FROM `tdformula` b
                JOIN `tdcategoryformula` a ON b.`id_categoryformula`=a.`id_category`
                JOIN `tditemwork` c ON c.`id_item`=b.`id_item` 
                LIMIT $offset,$lim"
        ); 
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'"); 
        $tdkindofraw = DB::table('tdkindofraw')->get();
        $tdmasterkoefisien = DB::table('tdmasterkoefisien')->get();
        $tb_domisili_kabkot = DB::table('tb_domisili_kabkot')->get(); 
        return view('setting_master.material')->with(compact('data', 'session', 'tdkindofraw', 
            'tdmasterkoefisien','tb_domisili_kabkot')); 
    }
    public function category(){ 
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'");  
        return view('setting_master.category')->with(compact('session'));
    } 
    public function formula($offset=null, $lim=null){  
        $offset=(!$offset?0:$offset);
        $lim=(!$lim?5:$lim);
        $data = DB::select(
            "SELECT 
                a.`id_category` AS name_category,
                b.`id_item`
                FROM `tdformula` b
                JOIN `tdcategoryformula` a ON b.`id_categoryformula`=a.`id_category`
                JOIN `tditemwork` c ON c.`id_item`=b.`id_item`
                LIMIT $offset,$lim"
        ); 
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'");  
        $tdkindofraw = DB::table('tdkindofraw')->where('status',1)->get();
        $tdmasterkoefisien = DB::table('tdmasterkoefisien')->get();
        $tditemwork = DB::table('tditemwork')->where('status',1)->get();
        $category = DB::table('tdcategoryformula')->where('status',1)->get();
        $tb_domisili_kabkot = DB::table('tb_domisili_kabkot')->get();  
        return view('pages.formula')->with(compact('data', 'session', 'tdkindofraw', 
        'tdmasterkoefisien','tb_domisili_kabkot', 'category', 'tditemwork'));
    }
    public function rab($offset=null, $lim=null){ 
        $session = array("status"=>200,'pesan'=>'');  
        return view('pages.rab')->with(compact('session'));
    }
    public function project (){ 
        $session = array("menu"=>"menu-is-opening menu-open","menu_open"=>"style='display: block;'");  
        return view('pages.rab')->with(compact('session'));
    }
}
