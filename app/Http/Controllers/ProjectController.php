<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; 

class ProjectController extends Controller
{
    //
    //
    public function data_project($id=null){ 
        return Project::data_project($id);
    }
    public function save_project(Request $request){ 	 
        $file = $request->file('nama_file');
        $nama_file = $file->getClientOriginalName();
        $lokasi_picture = $file->getRealPath();
        $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$file->getClientOriginalName()); 
        $data = [ 
            'name_project'=>$request->input('name_project'), 
            'work_project'=>$request->input('work_project'), 
            'location'=>$request->input('location'), 
            'code_picture'=>$request->input('code_picture'), 
            'no_rab'=>$request->input('no_rab'), 
            'name_picture'=>$nama_file,
            'lokasi_file'=>$tujuan_upload."\\",
            'status'=>1
        ];     
        $data = Project::save_project($data);
        if ($data) {
            return redirect('rab')->with( ['data' => $data] ); 
        } else {
            return redirect('rab')->with( ['data' => $data] ); 
        } 
    }
    public function ubah_project(Request $request){ 
        $id = $request->input('up_id_project'); 
        $file = $request->file('up_nama_file');
        $nama_file = $file->getClientOriginalName();
        $lokasi_picture = $file->getRealPath();
        $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$file->getClientOriginalName()); 
        $data = [ 
            'name_project'=>$request->input('up_name_project'), 
            'work_project'=>$request->input('up_work_project'), 
            'location'=>$request->input('up_location'), 
            'code_picture'=>$request->input('up_code_picture'), 
            'no_rab'=>$request->input('up_no_rab'), 
            'name_picture'=>$nama_file,
            'lokasi_file'=>$tujuan_upload."\\",
            'status'=>1
        ];     
        $data = Project::ubah_project($data, $id);
        $msg_ok = "<div class='alert alert-success' role='alert'>
                This is a success alert—check it out!
                </div>";
        $msg_error = "<div class='alert alert-danger' role='alert'>
                This is a success alert—check it out!
                </div>"; 
        if ($data) {
            $session = array(['status' => 200, 'pesan'=>$msg_ok]);  
            return redirect('rab')->with(compact('session')); 
        } else {
            $session = array(['status' => 400, 'pesan'=>$msg_error]);  
            return redirect('rab')->with(compact('session')); 
        } 	
    }
    public function deleteByIdProject(Request $request){ 	
        $id = $request->input('id_project');
        $data = [ 
            'status'=>0
        ];    
        return Project::deleteByIdProject($data, $id);
    }
}
