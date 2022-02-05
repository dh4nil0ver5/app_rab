<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rab;

class RabController extends Controller
{
    //
    public function data_rab(){ 
        return Rab::data_rab();
    } 
    public function save_rab(Request $request){ 
        $data = [
            'id_project'=>$request->input('id_project'),
            'id_work'=>$request->input('id_work'),
            'id_pointofwork'=>$request->input('id_pointofwork'),
            'id_analisis'=>$request->input('id_analisis'),
            'id_itemwork'=>$request->input('id_itemwork'),
            'id_activitywork'=>$request->input('id_activitywork'),
            'idx'=>$request->input('txtIdx'),
            'spesifikasi'=>$request->input('spesifikasi'),
            'panjang'=>$request->input('panjang'),
            'lebar'=>$request->input('lebar'),
            'tinggi'=>$request->input('tinggi'),
            'unit'=>$request->input('unit'),
            'volume'=>$request->input('volume'),
            'code_koef'=>$request->input('satuan'),
            'hsp'=>$request->input('hsp'),
            'total'=>$request->input('total'),
            'status'=>1
        ];
        return Rab::save_rab($data);
    }
    public function ubah_rab(){ 
        return Rab::ubah_rab();
    }
    public function data_rab_hapus(){ 
        return Rab::data_rab_hapus();
    }
}
