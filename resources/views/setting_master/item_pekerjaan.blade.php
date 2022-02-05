@extends('layouts.app_itempekerjaan')

@section('content')
<div class="table-responsive" style="width: 100%"> 
  <button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
  data-toggle="modal" data-target="#newMaster">
                  Tambah Item Pekerjaan
                </button> 
    <table id="lista_proiecte" class="table table-striped table-hover" style="width: 100%">
      <thead>
        <tr>
            <th>No</th> 
            <th>Item Pekerjaan</th> 
            <th>AKSI</th> 
        </tr> 
      </thead>
    </table>
  </div>
  <div class="modal fade" id="newMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New item pekerjaan</h5> 
        </div>
        <div class="modal-body">
          <div class="row">  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Nama Item Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="name_ofitem" />
            </div>  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveMaster">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="updateMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Ubah item pekerjaan </h5> 
        </div>
        <div class="modal-body">
          <div class="row"> 
            <div class="col-md-5" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Nama Item Pekerjaan</label>
            </div>
            <div class="col-md-7" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="up_id_item" hidden/>
              <textarea type="text" class="form-control" id="up_name_ofitem" style="width: 100%;"></textarea>
            </div> 
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveUpMaster">Save changes</button>
        </div>
      </div>
    </div>
  </div> 
@endsection 