<?php

use Illuminate\Support\Facades\Route;
// pages
Route::get('/', 'PagesController@index')->name("welcome");
Route::get('pekerjaan', 'PagesController@pekerjaan')->name("pekerjaan");
Route::get('sub_pekerjaan', 'PagesController@sub_pekerjaan')->name("sub_pekerjaan");
Route::get('item_pekerjaan', 'PagesController@item_pekerjaan')->name("item_pekerjaan"); 
Route::get('material', 'PagesController@material')->name("material");
Route::get('formula', 'PagesController@formula')->name("formula");
Route::get('category', 'PagesController@category')->name("category");
Route::get('rab', 'PagesController@rab')->name("rab"); 
// 
Route::post('save/pekerjaan', 'PekerjaanController@save_pekerjaan')->name("save_pekerjaan");
Route::post('update/pekerjaan', 'PekerjaanController@update_pekerjaan')->name("update_pekerjaan");
Route::post('delete/pekerjaan', 'PekerjaanController@deleteByIdpekerjaan')->name("update_Pekerjaan"); 
Route::get('data/pekerjaan', 'PekerjaanController@listpekerjaan')->name("listpekerjaan");
Route::get('ambil/pekerjaan/{id}', 'PekerjaanController@dataByIdPekerjaan')->name("dataByIdMaster");
// 
Route::post('save/sub/pekerjaan', 'SubpekerjaanController@save_subpekerjaan')->name("save_subpekerjaan"); 
Route::post('update/sub/pekerjaan', 'SubpekerjaanController@update_subpekerjaan')->name("update_subpekerjaan"); 
Route::post('delete/sub/pekerjaan', 'SubpekerjaanController@deleteByIdsubpekerjaan')->name("deleteByIdsubpekerjaan"); 
Route::get('list_formula', 'SubpekerjaanController@list_formula')->name("list_formula");
Route::get('data/subpekerjaan/{id}', 'SubpekerjaanController@getByIdPointOfWork')->name("getByIdPointOfWork");
//   
Route::post('save/item/pekerjaan', 'ItempekerjaanController@save_itempekerjaan')->name("save_itempekerjaan"); 
Route::post('update/item/pekerjaan', 'ItempekerjaanController@update_itempekerjaan')->name("update_itempekerjaan"); 
Route::post('delete/item/pekerjaan', 'ItempekerjaanController@deleteByIditempekerjaan')->name("deleteByIditempekerjaan"); 
Route::get('data/item/pekerjaan', 'ItempekerjaanController@data_itempekerjaan')->name("data_itempekerjaan");
Route::get('data/item/pekerjaan/{id}', 'ItempekerjaanController@dataByIdPekerjaan')->name("getByIdPointOfWork");
//   
Route::post('save/material/pekerjaan', 'MaterialpekerjaanController@save_materialpekerjaan')->name("save_itempekerjaan"); 
Route::post('update/material/pekerjaan', 'MaterialpekerjaanController@update_materialpekerjaan')->name("update_itempekerjaan"); 
Route::post('delete/material/pekerjaan', 'MaterialpekerjaanController@deleteByIdmaterialpekerjaan')->name("deleteByIditempekerjaan"); 
Route::get('data/material/pekerjaan', 'MaterialpekerjaanController@data_materialpekerjaan')->name("data_itempekerjaan");
Route::get('data/material/pekerjaan/{id}', 'MaterialpekerjaanController@dataByIdPekerjaan')->name("getByIdPointOfWork");
Route::get('data/material/kategori/{id}', 'MaterialpekerjaanController@datakategoriPekerjaan')->name("getByIdPointOfWork");
Route::post('update/material/category', 'MaterialpekerjaanController@updatematerialcategory')->name("updatematerialcategory"); 
//  
Route::post('save/category/pekerjaan', 'CategoriController@save_categorypekerjaan')->name("save_itempekerjaan"); 
Route::post('update/category/pekerjaan', 'CategoriController@update_categorypekerjaan')->name("update_itempekerjaan"); 
Route::post('delete/category/pekerjaan', 'CategoriController@deleteByIdcategorypekerjaan')->name("deleteByIditempekerjaan"); 
Route::get('data/category/pekerjaan', 'CategoriController@data_categorypekerjaan')->name("data_itempekerjaan");
Route::get('data/category/pekerjaan/{id}', 'CategoriController@dataByIdPekerjaan')->name("getByIdPointOfWork");
//  
Route::post('save/formula/pekerjaan', 'FormulaController@save_formulapekerjaan')->name("save_formulapekerjaan"); 
Route::post('update/formula/pekerjaan', 'FormulaController@update_formulapekerjaan')->name("update_formulapekerjaan"); 
Route::post('delete/formula/pekerjaan', 'FormulaController@deleteByIdformulapekerjaan')->name("deleteByIdformulapekerjaan"); 
Route::post('update/margin', 'FormulaController@update_margin')->name("update_margin"); 
Route::get('data/formula/pekerjaan', 'FormulaController@data_formulapekerjaan');
Route::get('data/formula/pekerjaan/{id}', 'FormulaController@dataByIdPekerjaan')->name("dataByIdPekerjaan");
Route::get('data/formula/pekerjaan/kategori/{id}', 'FormulaController@data_materialformula')->name("dataByIdPekerjaan");
Route::get('data/formula/jenis/{id}', 'FormulaController@data_materialbycategory')->name("dataByIdPekerjaan");
//  
Route::post('save/project', 'ProjectController@save_project')->name("save_projectpekerjaan");
Route::post('ubah/project', 'ProjectController@ubah_project')->name("ubah_project");  
Route::post('delete/project', 'ProjectController@deleteByIdProject')->name("deleteByIdformulapekerjaan");  
Route::get('data/project', 'ProjectController@data_project')->name('data_projectpekerjaan');
Route::get('data/project/{id}', 'ProjectController@data_project')->name("dataByIdPekerjaan");
// 
Route::post('save/rab', 'RabController@save_rab')->name("save_rab");
Route::post('ubah/rab', 'RabController@ubah_rab')->name("ubah_rab");  
Route::get('data/rab', 'RabController@data_rab');
Route::get('data/rab/{id}', 'RabController@data_rab')->name("data_rab");
Route::get('data/rab/{id}/hapus', 'RabController@data_rab_hapus')->name("data_rab_hapus");
// 
Route::post('save/activity', 'ActivityController@save_activity')->name("save_activity");
Route::post('ubah/activity', 'ActivityController@ubah_activity')->name("ubah_activity");
Route::get('data/activity', 'ActivityController@data_activity')->name("data_activity");
Route::get('data/activity/{id}', 'ActivityController@data_activity')->name("data_activity");
Route::get('hapus/activity/{id}', 'ActivityController@hapus_activity')->name("hapus_activity");