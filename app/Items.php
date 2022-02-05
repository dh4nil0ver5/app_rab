<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Items extends Model
{ 
    // untuk Pekerjaan of work
    public static function data_itempekerjaan(){
        $data = DB::table('tditemwork')->where("status", 1)->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function dataByIdPekerjaan($id){
        $data = DB::table('tditemwork')->where("id_item", $id)->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function update_itempekerjaan($data, $id)
    {
        $data = DB::table('tditemwork')->where('id_item', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function deleteByIditempekerjaan($data, $id)
    {
        $data = DB::table('tditemwork')->where('id_item', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function save_itempekerjaan($data)
    {
        $data = DB::table('tditemwork')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
}
