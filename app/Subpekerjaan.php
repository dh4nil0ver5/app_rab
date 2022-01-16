<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subpekerjaan extends Model
{
    //
    public static function getByIdMaster($id)
    {
        $data = DB::table('tdmasterwork')->where('id_work', $id)->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function readData()
    {
        $data = DB::select("SELECT tdmasterwork.`name_work`,tdpointofwork.`name_ofpointwork`, 
                    tdpointofwork.`status`, `tdpointofwork`.`id_pointofwork`, tdpointofwork.id_work
                    FROM tdmasterwork
                    JOIN tdpointofwork ON tdmasterwork.`id_work`=tdpointofwork.`id_work`
                    WHERE `tdpointofwork`.`status`=1");
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function insertListFormula($data)
    {
        $data = DB::table('tdpointofwork')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function update_master($data, $id)
    {
        $data = DB::table('tdpointofwork')->where('id_pointofwork', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function deleteByIdMaster($data, $id)
    {
        $data = DB::table('tdpointofwork')->where('id_pointofwork', $id)->update($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function getByIdPointOfWork($id)
    {
        $data = DB::table('tdpointofwork')->where('id_pointofwork', $id)->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
}
