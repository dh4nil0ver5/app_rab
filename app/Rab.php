<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rab extends Model
{
    protected $fillable = [
            'id_project', 
            'id_work',
            'id_pointofwork',
            'id_analisis',
            'id_itemwork',
            'id_activitywork',
            'idx',
            'spesifikasi',
            'panjang',
            'lebar',
            'tinggi',
            'unit',
            'volume',
            'code_koef',
            'hsp',
            'total',
            'status' 
    ];

    //
    public static function data_rab($id=null){  
        $data = DB::table('tdrabplan')
            ->join('tdnameproject', 'tdrabplan.id_project', '=','tdnameproject.id_project')
            ->join('tdmasterwork', 'tdrabplan.id_work', '=', 'tdmasterwork.id_work')
            ->join('tdpointofwork', 'tdrabplan.id_pointofwork', '=', 'tdpointofwork.id_pointofwork')
            ->join('tditemwork', 'tdrabplan.id_itemwork', '=', 'tditemwork.id_item')
            ->join('tdactivitywork', 'tdrabplan.id_activitywork', '=', 'tdactivitywork.id_activitywork')
            ->select( 
                "tdrabplan.id_rabplan as id_rabplan",
                "tdnameproject.name_project as name_project",
                "tdmasterwork.name_work as name_work",
                "tditemwork.name_ofitem as name_ofitem",
                "tdpointofwork.id_pointofwork as id_pointofwork",
                "tdpointofwork.name_ofpointwork as name_ofpointwork",
                "tdactivitywork.name_activity as name_activity",
                "tdrabplan.idx as idx" 
            ) 
            // ->groupBy('id_pointofwork')
            ->get();
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
    public static function save_rab($data){
        $data = DB::table('tdrabplan')->insert($data);
        if ($data) {
            $data = array("status" => 200, "data" => $data);
            return json_encode($data);
        } else {
            $data = array("status" => 400, "data" => $data);
            return json_encode($data);
        }
    }
}
