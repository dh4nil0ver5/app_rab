@extends('layouts.app_pekerjaan')

@section('content')
<div class="table-responsive" style="width: 100%"> 
  <button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
  data-toggle="modal" data-target="#newMaster">
                  Tambah Master
                </button> 
    <table id="list_pekerjaan" class="table table-striped table-hover" style="width: 100%">
      <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Pekerjaan</th> 
            <th>AKSI</th> 
        </tr> 
      </thead>
    </table>
  </div>
  <div class="modal fade" id="newMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New master</h5> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="id_pekerjaan" /> 
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Master Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="master_pekerjaan" />
            </div>  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" id="saveMaster">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="updateMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Ubah master </h5> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="up_id_pekerjaan" readonly/>
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Master Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="up_master_pekerjaan" />
            </div>  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" id="saveUpMaster">Simpan perubahan</button>
        </div>
      </div>
    </div>
  </div> 
@endsection 