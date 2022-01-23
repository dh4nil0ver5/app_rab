<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
    //
    public function data_activity($id=null){ 
        return Activity::data_activity($id);
    } 
    public function save_activity(Request $request){ 
        $data = [
            'name_activity'=>$request->input('nama_activity'),
            'status'=>1
        ];
        return Activity::save_activity($data);
    } 
    public function ubah_activity(Request $request){ 
        $id = $request->input('id_activitywork');
        $data = [
            'name_activity'=>$request->input('nama_activity'),
            'status'=>1
        ];
        return Activity::ubah_activity($data, $id);
    } 
    public function hapus_activity($id){  
        $data = [ 
            'status'=>0
        ];
        return Activity::hapus_activity($data, $id);
    } 
}
