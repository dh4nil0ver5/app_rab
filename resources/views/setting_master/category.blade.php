@extends('layouts.app_category')

@section('content')
<button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
data-toggle="modal" data-target="#newCategory">
                Tambah  Kategori
              </button>  
<div class="table-responsive" style="width: 100%"> 
    <table id="list_formula" class="table table-striped table-hover" style="width: 100%">
      <thead>
        <tr>
            <th >No</th>
            <th >Nama Kategori</th> 
            <th >AKSI</th> 
        </tr> 
      </thead>
    </table>
</div>
<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body"> 
        <div class="row">
          <div class="col-md-6">
            <label for="" class="form-label">Nama Kategori</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control form-input" id="id_namekategori">
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
<div class="modal fade" id="upCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Kategori</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body"> 
        <div class="row">
          <div class="col-md-6">
            <label for="" class="form-label">Nama Kategori</label>
          </div>
          <div class="col-md-6"> 
            <input type="number" class="form-control form-input" id="up_idkategori" hidden>
            <input type="text" class="form-control form-input" id="up_namekategori">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"id="updateFormula" >Save changes</button>
      </div>
    </div>
  </div>
</div> 
@endsection 