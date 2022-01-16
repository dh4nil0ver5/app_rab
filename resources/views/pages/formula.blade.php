@extends('layouts.app_formula')

@section('content')
<button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
data-toggle="modal" data-target="#newFormula">
                Tambah Formula By Material
              </button>  
<div class="table-responsive" style="width: 100%"> 
    <table id="list_formula" class="table table-striped table-hover" style="width: 100%">
      <thead>
        <tr>
            <th style="width: 10%;">No</th>
            <th style="width: 50%;">Formula Name</th>
            <th style="width: 10%;">Category</th> 
            <th style="width: 10%;">Margin</th> 
            <th style="width: 20%;">AKSI</th> 
        </tr> 
      </thead>
    </table>
</div>
<div class="modal fade" id="newFormula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Formula</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body"> 
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kategori</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="id_categoryformula" class="form-control">
                @foreach($category as $cat)   
                <option value="{{$cat->id_category}}">{{ $cat->name_ofcategory }}</option> 
                @endforeach 
              </select>
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Formula Name</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="id_item" class="form-control">
                @foreach($tditemwork as $cat)   
                <option value="{{$cat->id_item}}">{{ $cat->name_ofitem }}</option> 
                @endforeach 
              </select>
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Margin</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="number" class="form-control form-input" id="percent_margin">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"id="saveFormula" >Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="DetailFormula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" 
  style="width: 100%;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetSelect()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class="row">  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kategori</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <select name="" id="tdkindofraw" class="form-control" kode="">
                <option value="0">-- material yang digunakan --</option> 
                @foreach($tdkindofraw as $cat)   
                <option value="{{$cat->id_kindofraw}}">{{ $cat->name_of_kind }}</option> 
                @endforeach 
              </select>
            </div>
            <div class="table-responsive" style="width: 100%" id="isitabeluse"> 
                <table id="using_list_data_formula" class="table table-striped table-hover" style="width: 100%">
                  <thead>
                    <tr>
                        <th style="width: 10%;">No</th>
                        <th style="width: 50%;">Name</th>
                        <th style="width: 10%;">Category</th> 
                        <th style="width: 10%;">Qty</th> 
                        <th style="width: 10%;">Price</th>  
                    </tr> 
                  </thead>
                </table>
                <table id="" class="table table-striped table-hover" style="width: 100%" border=1>
                  <tr>
                    <td colspan="8">Total</td>
                    <td colspan="1" id="res_sum"></td>
                  </tr>
                  <tr>
                    <td colspan="8">Margin</td>
                    <td colspan="1">
                      <p id="margin" onclick="ubah_percen()"></p>
                      <div id="upMargin" 
                      style="display: flex; 
                        flex-direction: row; 
                        justify-content: space-between;" hidden>
                        <input type="text" hidden id="val_idanalisa">
                        <input type="text" id="percen_margin_up">
                        <div style="display: flex; flex-direction: row;"> 
                          <button onclick="saves()"><i class="fas fa-save"></i></button>
                          <button onclick="closes()"><i class="fas fa-close"></i></button>
                        </div>
                      </div> 
                    </td>
                  </tr>
                  <tr>
                    <td colspan="8">HSP</td>
                    <td colspan="1" id="result"></td>
                  </tr>
                </table>
            </div>
            <div class="table-responsive" style="width: 100%" id="isitabellist"  hidden> 
                <table id="list_data_formula" class="table table-striped table-hover" style="width: 100%">
                  <thead>
                    <tr>
                        <th style="width: 10%;">No</th>
                        <th style="width: 50%;">Name</th>
                        <th style="width: 10%;">Category</th> 
                        <th style="width: 10%;">Qty</th> 
                        <th style="width: 10%;">Price</th> 
                        <th style="width: 20%;">AKSI</th> 
                    </tr> 
                  </thead>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer none">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"id="saveFormula" >Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection 