<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriController extends Controller
{
    //
    public function data_categorypekerjaan(){ 
        return Category::data_categorypekerjaan();
    }
    //
    public function save_categorypekerjaan(Request $request){
        $data = [ 
            'name_ofcategory'=>$request->input('name_ofcategory'),
            'status'=>1
        ];  
        return Category::save_categorypekerjaan($data);
    }
    //
    public function update_categorypekerjaan(Request $request){
        $id=$request->input('id_category');
        $data = [ 
            'name_ofcategory'=>$request->input('name_ofcategory'),
            'status'=>1
        ];  
        return Category::update_categorypekerjaan($data, $id);
    }
    //
    public function deleteByIdcategorypekerjaan(Request $request){
        $id=$request->input('id_category');
        $data = [  
            'status'=>0
        ];  
        return Category::deleteByIdcategorypekerjaan($data, $id);
    }
    //
    public function dataByIdPekerjaan($id){ 
        return Category::data_categorypekerjaan($id);
    }
}
