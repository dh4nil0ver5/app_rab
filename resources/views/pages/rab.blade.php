@extends('layouts.app_rab')

@section('content')
<div class="container-fluid" style="padding: 10px;">
  <div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
      <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" 
          role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" 
          role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">RAB</a>
        </li> 
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
          <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#newProject" 
            style="margin-top: 10px; margin-bottom: 10px;">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah
                </button>
          <div class="table-responsive" style="width: 100%;">
            <table id="list_project"  class="table table-striped table-hover" style="width: 100%">
              <thead> 
                <tr> 
                  <th>no</th>
                  <th>Name project</th>
                  <th>Pekerjaan</th> 
                  <th>Lokasi</th>
                  <th>Lokasi File</th>
                  <th>Kode Gambar</th>
                  <th>No Rab</th>
                  <th>Nama file</th>
                  <th>Aksi</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" 
          aria-labelledby="custom-tabs-one-profile-tab"> 
          <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#newRab" 
            style="margin-top: 10px; margin-bottom: 10px;">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah
                </button>
          <div class="table-responsive" style="width: 100%;">
            <table id="list_rab"  class="table table-striped table-hover" style="width: 100%">
              <thead>
                <tr>
                  <th colspan=6></th>
                  <th colspan=4>Volume</th>
                  <th colspan=5></th>
                </tr>
                <tr>
                  <th>Pekerjaan</th>
                  <th>Sub Pekerjaan</th>
                  <th>Activity</th>
                  <th>Idx</th>
                  <th>Formula Yang Di gunakan</th>
                  <th>Spesifikasi</th>
                  <th>Panjang</th>
                  <th>Lebar</th>
                  <th>Tinggi</th>
                  <th>Unit</th>
                  <th>Vol</th>
                  <th>Total Volume</th>
                  <th>Satuan</th>
                  <th>HSP</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
            </table>
          </div>
        </div> 
      </div>
    </div>
    <!-- /.card -->
  </div> 
</div>
<div class="modal fade" id="newProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <form action="{{ route('save_projectpekerjaan') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Nama project</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="name_project" id="name_project" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="date" class="form-control form-input" name="work_project" id="pekerjaan" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Lokasi</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="location" id="lokasi" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Revisi</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="number" class="form-control form-input" name="revisi" id="revisi" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Lokasi file</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="lokasi_file" id="lokasi_file" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode gambar</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="code_picture" id="kode_gambar" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">No RAB</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="no_rab" id="no_rab" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Nama file</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">						
              <input type="file" name="nama_file" id="" />
            </div> 
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <input type="submit" class="btn btn-primary"id="saveProject" value='Save changes' />
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="updateProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ URL::to('ubah/project') }}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Nama project</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="up_id_project" id="name_project" hidden/>
              <input type="text" class="form-control form-input" name="up_name_project" id="name_project" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Pekerjaan</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="up_work_project" id="pekerjaan" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Lokasi</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="up_location" id="lokasi" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Revisi</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="number" class="form-control form-input" name="up_revisi" id="revisi" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Lokasi file</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="up_lokasi_file" id="lokasi_file" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Kode gambar</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="up_code_picture" id="kode_gambar" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">No RAB</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control form-input" name="up_no_rab" id="no_rab" />
            </div> 
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Nama file</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">						
              <input type="file" name="up_nama_file" id="" />
            </div> 
          </div>
      </div>
      <div class="modal-footer"> 
        <input type="submit" class="btn btn-primary"id="saveProject" value='Save changes' />
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="newRab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">new Rab</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode project</label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <select name="" id="tdkindofraw" class="form-control" kode="">
              <option value="0">-- project --</option> 
              @foreach($name_project as $cat)   
              <option value="{{$cat->id_project}}">{{ $cat->name_project }}</option> 
              @endforeach 
            </select>
          </div> 
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode pekerjaan</label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <select name="" id="tdkindofraw" class="form-control" kode="">
              <option value="0">-- pekerjaan --</option> 
              @foreach($tdmasterwork as $cat)   
              <option value="{{$cat->id_work}}">{{ $cat->name_work }}</option> 
              @endforeach 
            </select>
          </div> 
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode sub pekerjaan</label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <select name="" id="tdkindofraw" class="form-control" kode="">
              <option value="0">-- sub pekerjaan --</option> 
              @foreach($tdpointofwork as $cat)   
              <option value="{{$cat->id_work}}">{{ $cat->name_ofpointwork }}</option> 
              @endforeach 
            </select>
          </div> 
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode spesifikasi </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="text" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode panjang </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="number" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode lebar </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="number" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode tinggi </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="number" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode unit </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="number" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode volume </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="number" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode satuan </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="text" class="text form-control form-input" />
          </div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode HSP </label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="text" class="text form-control form-input" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-xs btn-flat">
          <i class="fas fa-save"></i> Save
        </button>
      </div>
    </div>
  </div>
</div>
@endsection 