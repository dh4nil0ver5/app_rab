<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pekerjaan;
use Illuminate\View\View; 

class PekerjaanController extends Controller
{
    // 
    // data pekerjaan
    // 
    public function listpekerjaan(){
        return Pekerjaan::listpekerjaan();
    } 
    // 
    public function dataByIdPekerjaan($id){
        return Pekerjaan::dataByIdPekerjaan($id);
    }
    // 
    public function save_pekerjaan(Request $request)
    {
        $data = [
            "id_work" => $request->input('id_work'),
            "name_work" => $request->input('name_work'),
            "status" => 1
        ];
        return Pekerjaan::insertPekerjaan($data);
    }
    // 
    public function update_Pekerjaan(Request $request)
    {
        $id = $request->input('id_work');
        $data = [
            "name_work" => $request->input('name_work') 
        ];
        return Pekerjaan::update_Pekerjaan($data, $id);
    } 
    public function deleteByIdPekerjaan(Request $request)
    {
        $id = $request->input('id_work');
        $data = [
            "status" => 0
        ];
        return Pekerjaan::delete_Pekerjaan($data, $id);
    } 
}
