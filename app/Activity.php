<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Activity extends Model
{
    //
    public static function data_activity($id=null){
        $q = "";
        if ($id==null) {
            $q="where a.status=1";
        } else {
            $q="where a.status=1 and a.id_activitywork=".$id;    
        }  
        $data = DB::select("SELECT * FROM `tdactivitywork` a ".$q); 
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function save_activity($data){  
        $data = DB::table('tdactivitywork')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
    public static function ubah_activity($data, $id){  
        $data = DB::table('tdactivitywork')->where('id_activitywork',$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
    public static function hapus_activity($data, $id){  
        $data = DB::table('tdactivitywork')->where('id_activitywork',$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
}
