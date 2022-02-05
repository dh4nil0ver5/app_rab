<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    //
    public static function data_categorypekerjaan($id=null){
        $q = "";
        if ($id==null) {
            $q=" where status=1"; 
        } else {
            $q=" where status=1 and id_category=".$id;    
        } 
        $data = DB::select("SELECT * FROM tdcategoryformula".$q); 

        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function save_categorypekerjaan($data){ 
        $data = DB::table('tdcategoryformula')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function update_categorypekerjaan($data, $id){  
        $data = DB::table('tdcategoryformula')->where('id_category',$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function deleteByIdcategorypekerjaan($data, $id){  
        $data = DB::table('tdcategoryformula')->where('id_category',$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
}
