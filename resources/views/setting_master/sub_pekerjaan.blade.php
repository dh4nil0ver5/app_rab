@extends('layouts.app_suppekerjaan')

@section('content')
<div class="table-responsive" style="width: 100%"> 
  <button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
  data-toggle="modal" data-target="#newMaster">
                  Tambah Sub Pekerjaan
                </button> 
    <table id="lista_proiecte" class="table table-striped table-hover" style="width: 100%">
      <thead>
        <tr>
            <th>No</th>
            <th>Kode <br>Sub Pekerjaan</th>
            <th>Pekerjaan</th>
            <th>Sub pekerjaan</th> 
            <th>AKSI</th> 
        </tr> 
      </thead>
    </table>
  </div>
  <div class="modal fade" id="newMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New sub pekerjaan</h5> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <select name="" id="id_work" class="form-control">
                @foreach ($data as $d)
                <option value="{{ $d->id_work }}">{{ $d->name_work }}</option> 
                @endforeach
              </select>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode Sub Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;"> 
              <input type="text" class="form-control" id="id_pointofwork" /> 
              <!-- <select name="" id="id_pointofwork" class="form-control">
                @foreach ($tdpointofwork as $e)
                <option value="{{ $e->id_pointofwork }}">{{ $e->name_ofpointwork }}</option> 
                @endforeach
              </select> -->
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Master Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="name_ofpointwork" />
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Ubah sub pekerjaan </h5> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="up_id_work" hidden/>
              <input type="text" class="form-control" id="up_id_pointofwork" readonly/>
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Master Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="up_name_ofpointwork" />
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