<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItempekerjaanController extends Controller
{
    //
    public function data_itempekerjaan()
    {
        return Items::data_itempekerjaan();
    }
    // 
    public function dataByIdPekerjaan($id)
    {
        return Items::dataByIdPekerjaan($id);
    }
    // 
    public function save_itempekerjaan(Request $request)
    {
        $data = [
            "name_ofitem" => $request->input('name_ofitem'),
            "status" => 1
        ];
        return Items::save_itempekerjaan($data);
    }
    // 
    public function update_itempekerjaan(Request $request)
    {
        $id = $request->input('id_item');
        $data = [
            "name_ofitem" => $request->input('name_ofitem')
        ];
        return Items::update_itempekerjaan($data, $id);
    }
    public function deleteByIditempekerjaan(Request $request)
    {
        $id = $request->input('id_item');
        $data = [
            "status" => 0
        ];
        return Items::deleteByIditempekerjaan($data, $id);
    } 
}
