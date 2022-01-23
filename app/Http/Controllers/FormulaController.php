<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Formula; 

class FormulaController extends Controller
{
    // 
    public function data_formulapekerjaan($id=null){
        return Formula::listpekerjaan($id);
    }
    // 
    public function save_formulapekerjaan(Request $request){
        $data = [
            'id_categoryformula'=>$request->input('id_categoryformula'),
            'id_item'=>$request->input('id_item'),
            'percen_margin'=>$request->input('percen_margin'),
            'status'=>1
        ];   
        return Formula::save_formula($data);
    } 
    // 
    public function data_materialformula($id){ 
        return Formula::data_materialformula($id);
    } 
    public function data_materialbycategory($id){ 
        return Formula::data_materialbycategory($id);
    } 
    // 
    public function deleteByIdformulapekerjaan(Request $request){ 
        $id = $request->input('id_analisa');
        $data = [ 
            'status'=>0
        ];   
        return Formula::deleteByIdformulapekerjaan($data, $id);
    } 
    public function update_margin(Request $request){ 
        $id = $request->input('id_analisa');
        $data = [ 
            'percen_margin'=>$request->input('percen_margin'),
            'total_price'=>$request->input('total_price'),
            'hsp'=>$request->input('hsp'),
        ];   
        return Formula::update_margin($data, $id);
    } 
    // 
}
