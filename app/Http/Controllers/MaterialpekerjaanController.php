<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialpekerjaanController extends Controller
{ 
    // 
    public function data_materialpekerjaan (){
        return Material::listmaterial();
    }
    public function dataByIdPekerjaan($id){
        return Material::listmaterial($id);
    }
    public function save_materialpekerjaan(Request $request){
        $data = [
            'id_analisa'=>$request->input('id_analisa'),
            'id_city'=>$request->input('id_city'),
            'id_kindofraw'=>$request->input('id_kindofraw'),
            'name_raw'=>$request->input('description'), 
            'qty'=>$request->input('quantity'), 
            'code_koef'=>$request->input('code_koef'), 
            'price'=>$request->input('price'), 
            'status'=>1,
            'create_datetime'=>date("Y-m-d H:i:s")
        ];   
        return Material::save_materialpekerjaan($data);
    }
    public function update_materialpekerjaan(Request $request){
        $id=$request->input('id_raw');
        $data = [  
            'id_city'=>$request->input('id_city'),
            'id_kindofraw'=>$request->input('id_kindofraw'),
            'name_raw'=>$request->input('description'), 
            'qty'=>$request->input('quantity'), 
            'code_koef'=>$request->input('code_koef'), 
            'price'=>$request->input('price'), 
            'status'=>1
        ];   
        return Material::update_materialpekerjaan($data, $id);
    }
    public function datakategoriPekerjaan($id){ 
        return Material::datakategoriPekerjaan($id);
    }
    public function updatematerialcategory(Request $request){
        $id=$request->input('id_raw');
        $data = [  
            'id_analisa'=>$request->input('id_analisa'),
            'modified_date' => now()
        ];   
        return Material::updatematerialcategory($data, $id);
    }
    public function deleteByIdmaterialpekerjaan(Request $request){
        $id=$request->input('id_raw');
        $data = [  
            'status'=>0
        ];   
        return Material::updatematerialcategory($data, $id);
    }
    // 
    //  
}
