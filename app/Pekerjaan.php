<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pekerjaan extends Model
{ 
    // untuk Pekerjaan of work
    public static function listpekerjaan(){
        $data = DB::table('tdmasterwork')->where("status", 1)->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function dataByIdPekerjaan($id){
        $data = DB::table('tdmasterwork')->where("id_work", $id)->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function update_Pekerjaan($data, $id)
    {
        $data = DB::table('tdmasterwork')->where('id_work', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function delete_Pekerjaan($data, $id)
    {
        $data = DB::table('tdmasterwork')->where('id_work', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function insertPekerjaan($data)
    {
        $dt1 = ['name_ofcategory'=>$data['name_work']];
        $data = DB::table('tdmasterwork')->insert($data);
        // $dt = DB::table('nama_ofcategory')->insert($dt1);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
}
