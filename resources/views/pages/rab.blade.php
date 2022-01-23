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
          <a class="nav-link" id="custom-tabs-one-activity-tab" data-toggle="pill" href="#activity" 
          role="tab" aria-controls="custom-tabs-one-activity" aria-selected="false">Activity</a>
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
        <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="custom-tabs-one-activity-tab">  
          <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#newActivity" 
            style="margin-top: 10px; margin-bottom: 10px;">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah
                </button>
          <div class="table-responsive" style="width: 100%;">  
            <table id="list_activity"  class="table table-striped table-hover" style="width: 100%">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Nama Aktifitas</td>
                  <td>action</td>
                </tr>
              </thead>
            </table>
          </div>
        </div> 
        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">  
          <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#newRab" 
            style="margin-top: 10px; margin-bottom: 10px;">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah
                </button>
          <div class="table-responsive" style="width: 100%;">
            <table id="list_rab"  class="table table-striped table-hover" style="width: 100%">
              <thead> 
                <tr>
                  <th>No</th> 
                  <th>Name project</th>
                  <th>Name work</th>
                  <th>Name sub pekerjaan</th>
                  <th>Name of activity</th> 
                  <th>Name of Item</th> 
                  <th>Idx</th>
                  <th>Aksi</th> 
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
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">new Rab</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode project</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <select name="" id="kode_project" class="form-control" kode="">
                  <option value="0">-- project --</option> 
                  @foreach($name_project as $cat)   
                  <option value="{{$cat->id_project}}">{{ $cat->name_project }}</option> 
                  @endforeach 
                </select>
              </div> 
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode pekerjaan</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <select name="" id="kode_pekerjaan" class="form-control" kode="">
                  <option value="0">-- pekerjaan --</option> 
                  @foreach($tdmasterwork as $cat)   
                  <option value="{{$cat->id_work}}">{{ $cat->name_work }}</option> 
                  @endforeach 
                </select>
              </div> 
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Kode sub pekerjaan</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <select name="" id="sub_pekerjaan" class="form-control" kode="">
                  <option value="0">-- sub pekerjaan --</option> 
                  @foreach($tdpointofwork as $cat)   
                  <option value="{{$cat->id_work}}" id_pointofwork="{{ $cat->id_pointofwork }}">{{ $cat->name_ofpointwork }}</option> 
                  @endforeach 
                </select>
              </div> 
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Formula</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <select name="" id="id_formula" class="form-control" kode="">
                  <option value="0">-- Formula yang digunakan --</option> 
                  @foreach($tdformula as $cat)   
                  <option value="{{$cat->id_analisa}}" id_item="{{$cat->id_item}}" hsp="{{$cat->hsp}}">{{ $cat->formula_name }}</option> 
                  @endforeach 
                </select>
              </div>  
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Activty</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <select name="" id="id_aktifitas" class="form-control" kode="">
                  <option value="0">-- Aktifitas --</option> 
                  @foreach($tdactivitywork as $cat)   
                  <option value="{{$cat->id_activitywork}}" >{{ $cat->name_activity }}</option> 
                  @endforeach 
                </select>
              </div>  
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Spesifikasi</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="text" class="text form-control form-input" id="spesifikasi"/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Panjang </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="number" class="text form-control form-input" id="txtPanjang"/>
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Lebar </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="number" class="text form-control form-input" id="txtLebar"/>
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Tinggi </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="number" class="text form-control form-input" id="txtTinggi"/>
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Unit </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="number" class="text form-control form-input" id="txtUnit" />
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Volume </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="number" class="text form-control form-input" id="txtVolume"/>
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">idx </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="number" class="text form-control form-input" id="txtIdx"/>
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Satuan </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"> 
                <select name="" id="txtSatuan" class="form-control" kode="">
                  <option value="0">-- Satuan --</option> 
                  @foreach($tdmasterkoefisien as $cat)   
                  <option value="{{$cat->code_koef}}" >{{ $cat->name_koefisien }}</option> 
                  @endforeach 
                </select>
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">HSP </label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="text" class="text form-control form-input" id="txtHsp" />
              </div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Total</label></div>
              <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
                <input type="text" class="text form-control form-input" id="txtTotal" />
              </div>
            </div>
          </div>
          <!--     -->
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-xs btn-flat" id="btnSave">
          <i class="fas fa-save"></i> Save
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="newActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">new Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">  
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Nama</label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="text" class="form-control form-input" id="nama_activity">
          </div> 
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-xs btn-flat" id="saveActivity">
          <i class="fas fa-save"></i> Save
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updateActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">new Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row"> 
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;"><label for="kode_project">Nama</label></div>
          <div class="col-md-6" style="margin-top: 5px; margin-bottom: 5px;">
            <input type="text" class="form-control form-input" id="upid_activitywork" hidden>
            <input type="text" class="form-control form-input" id="upnama_activity">
          </div> 
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-xs btn-flat" id="saveUpActivity">
          <i class="fas fa-save"></i> Save
        </button>
      </div>
    </div>
  </div>
</div>
@endsection 