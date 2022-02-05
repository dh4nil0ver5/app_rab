<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subpekerjaan;
use Illuminate\Support\Facades\DB;

class SubpekerjaanController extends Controller
{
    // 
    // data sub pekerjaan
    //  
    public function list_formula()
    {
        return Subpekerjaan::readData();
    }
    // 
    public function save_subpekerjaan(Request $request)
    {
        $data = [
            "id_work" => strtoupper($request->input('id_work')),
            "id_pointofwork" => strtoupper($request->input('id_pointofwork')),
            "name_ofpointwork" => strtoupper($request->input('name_ofpointwork')) ,
            "status"=>1
        ];
        return Subpekerjaan::insertListFormula($data);
    }
    // 
    public function getByIdPointOfWork($id)
    {
        return Subpekerjaan::getByIdPointOfWork($id);
    }
    // 
    public function update_subpekerjaan(Request $request)
    {
        $id = $request->input('up_id_pointofwork');
        $data = [
            "id_work" => $request->input('up_id_work'),
            "name_ofpointwork" => $request->input('up_name_ofpointwork'),
            "status" => 1
        ];
        return Subpekerjaan::update_master($data, $id);
    }
    // 
    public function deleteByIdsubpekerjaan(Request $request)
    {
        $id = $request->input('del_id_pointofwork');
        $data = [
            "status" => 0
        ];
        return Subpekerjaan::deleteByIdMaster($data, $id);
    }
}
