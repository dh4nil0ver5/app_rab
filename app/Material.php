<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 

class Material extends Model
{
    //list material 
    public static function listmaterial($id=null){
        $q = "";
        if ($id==null) {
            $q=" where a.status=1";
        } else {
            $q=" where a.status=1 and a.id_raw=".$id;    
        }
        $kota = DB::table('tb_domisili_kabkot')->get(); 
        $data = DB::select("SELECT
            a.id_raw as id_raw,
            a.`id_city` AS id_city,
            a.`name_raw` AS name_raw,
            a.`qty` AS qty,
            b.`name_of_kind` AS name_of_kind,
            a.`code_koef` AS code_koef,
            a.`price` AS price
            FROM tdrawmaterial a
            JOIN tdkindofraw b ON a.`id_kindofraw`=b.`id_kindofraw`
            JOIN `tdmasterkoefisien` c ON a.`code_koef`=c.`code_koef`
            JOIN tb_domisili_kabkot d ON a.`id_city`=d.`id_kabkot`
            ".$q); 

        if ($data) {
            $data = array("status" => 200, "data" => $data, "kabkot"=>$kota);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function listpekerjaan(){
        $data = DB::select("SELECT 
            a.id_analisa as id_analisa,
            b.name_ofcategory AS category,
            c.name_ofitem AS name_ofitem,
            a.percen_margin
            FROM tdformula a
            JOIN tdcategoryformula b ON a.id_categoryformula=b.`id_category`
            JOIN tditemwork c ON a.`id_item`=c.`id_item` 
            WHERE a.status=1"); 
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function datakategoriPekerjaan($id){
        $data = DB::select("SELECT 
        A.`id_raw` AS `id_raw`,
        a.`name_raw` AS name_raw,
        B.`name_of_kind` AS `name_of_kind`,
        a.`qty` AS qty,
        a.`price` AS price
                    FROM `tdrawmaterial` a
                    JOIN `tdkindofraw` b ON a.`id_kindofraw`=b.`id_kindofraw` 
                    WHERE a.status=1 AND b.`id_kindofraw`=".$id); 
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function save_materialpekerjaan($data){  
        $data = DB::table('tdrawmaterial')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
    public static function update_materialpekerjaan($data, $id){   
        $data = DB::table('tdrawmaterial')->where("id_raw",$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
    public static function updatematerialcategory($data, $id){   
        $data = DB::table('tdrawmaterial')->where("id_raw",$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
}
