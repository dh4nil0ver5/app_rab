<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Project extends Model
{
    //
    public static function data_project($id=null){  
        $q = "";
        if ($id==null) { 
            $data = DB::table('tdanameproject')->where('status',1)->get();
        } else {
            $data = DB::table('tdanameproject')->where(['status'=>1,'id_project'=>$id])->get(); 
        }  
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        } 
    }
    //
    public static function save_project($data){   
        return DB::table('tdanameproject')->insert($data);
    }
    public static function ubah_project($data, $id){    
        $data = DB::table('tdanameproject')->where('id_project', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        } 
    }
    public static function deleteByIdProject($data, $id){  
        $data = DB::table('tdanameproject')->where('id_project', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        } 
    }
}
