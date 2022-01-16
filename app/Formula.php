<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Formula extends Model
{
    //
    public static function listpekerjaan($id=null){
        $q = "";
        if ($id==null) {
            $q="where a.status=1";
        } else {
            $q=" where a.id_raw=".$id;    
        }
        $kota = DB::table('tb_domisili_kabkot')->get(); 
        $data = DB::select("SELECT 
        a.`id_analisa` AS `id_analisa`,
        b.name_ofitem AS `name_ofitem`,
        c.`name_ofcategory` AS `category`,
        a.`percen_margin` AS `percen_margin`
        FROM `tdformula` a
        JOIN `tditemwork` b ON a.`id_item`=b.`id_item`
        JOIN tdcategoryformula c ON a.`id_categoryformula`=c.`id_category` ".$q); 

        if ($data) {
            $data = array("status" => 200, "data" => $data, "kabkot"=>$kota);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function data_materialbycategory($id=null){
        $data = DB::table('tdrawmaterial')
            ->join('tdkindofraw', 'tdkindofraw.id_kindofraw', '=','tdrawmaterial.id_kindofraw')
            ->join('tb_domisili_kabkot', 'tb_domisili_kabkot.id_kabkot', '=', 'tdrawmaterial.id_city')
            ->join('tdformula', 'tdformula.id_analisa', '=', 'tdrawmaterial.id_analisa')
            ->select(
                'tdrawmaterial.id_raw AS id_raw',
                'tdrawmaterial.name_raw AS name_raw',
                'tdrawmaterial.qty AS qty',
                'tdrawmaterial.price AS price',
                'tdkindofraw.id_kindofraw AS id_kindofraw',
                'tdkindofraw.name_of_kind AS kind',
                'tb_domisili_kabkot.id_kabkot AS id_kabkot',
                'tdformula.id_analisa AS id_analisa'
            )
            ->where('tdrawmaterial.id_kindofraw',$id)
            ->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function data_materialformula($id=null){
        $tdformula = DB::table('tdformula')->where("id_analisa",$id)->get(); 
        $data = DB::table('tdrawmaterial')
            ->join('tdkindofraw', 'tdrawmaterial.id_kindofraw', '=', 'tdkindofraw.id_kindofraw')
            ->join('tdformula', 'tdrawmaterial.id_analisa', '=', 'tdformula.id_analisa')
            ->select(
                'tdrawmaterial.id_analisa AS id_analisa',
                'tdrawmaterial.name_raw AS name_raw',
                'tdkindofraw.id_kindofraw AS id_kindofraw',
                'tdkindofraw.name_of_kind AS kind',
                'tdrawmaterial.qty AS qty',
                'tdrawmaterial.price AS price')
            ->where('tdrawmaterial.id_analisa',$id)
            ->get(); 
        if ($data) {
            $data = array("status" => 200, "data" => $data, "tdformula"=>$tdformula);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    //
    public static function save_formula($data){  
        $data = DB::table('tdformula')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
    //
    public static function deleteByIdformulapekerjaan($data, $id){   
        $data = DB::table('tdformula')->where('id_analisa',$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
    public static function update_margin($data, $id){   
        $data = DB::table('tdformula')->where('id_analisa',$id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    } 
}
