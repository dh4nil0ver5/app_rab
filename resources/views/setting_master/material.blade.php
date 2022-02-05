@extends('layouts.app_material')

@section('content')
<button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
data-toggle="modal" data-target="#newMaterial">
                Tambah  Material
              </button>  
<div class="table-responsive" style="width: 100%"> 
    <table id="list_formula" class="table table-striped table-hover" style="width: 100%">
      <thead>
        <tr>
            <th >No</th>
            <th >Description</th>
            <th >Category</th> 
            <th >Quantity</th>  
            <th >AKSI</th> 
        </tr> 
      </thead>
    </table>
</div>
<div class="modal fade" id="newMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label for="master_pekerjaan">Kota</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="id_city" class="form-control">
                @foreach($tb_domisili_kabkot as $cat)   
                <option value="{{$cat->id_kabkot}}">{{ $cat->kab_atau_kota.' '.$cat->nama_kabkot }}</option> 
                @endforeach 
              </select>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Jenis Material</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="id_kindofraw" class="form-control">
                @foreach($tdkindofraw as $cat)   
                <option value="{{$cat->id_kindofraw}}">{{ $cat->name_of_kind }}</option> 
                @endforeach 
              </select>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Description</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <textarea name="" id="description" class="form-control"></textarea>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Quantity</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control" id="quantity">
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">UOM</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="code_koef" class="form-control">
                @foreach($tdmasterkoefisien as $cat)   
                <option value="{{$cat->code_koef}}">{{ $cat->name_koefisien }}</option> 
                @endforeach 
              </select>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">price</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="number" class="form-control" id="price">
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
<div class="modal fade" id="upMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label for="master_pekerjaan">Kota</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="up_id_city" class="form-control">
                @foreach($tb_domisili_kabkot as $cat)   
                <option value="{{$cat->id_kabkot}}">{{ $cat->kab_atau_kota.' '.$cat->nama_kabkot }}</option> 
                @endforeach 
              </select>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Jenis Material</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="up_id_kindofraw" class="form-control">
                @foreach($tdkindofraw as $cat)   
                <option value="{{$cat->id_kindofraw}}">{{ $cat->name_of_kind }}</option> 
                @endforeach 
              </select>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Description</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <textarea name="" id="up_description" class="form-control"></textarea>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">Quantity</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="text" class="form-control" id="up_quantity">
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">UOM</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <select name="" id="up_code_koef" class="form-control">
                @foreach($tdmasterkoefisien as $cat)   
                <option value="{{$cat->code_koef}}">{{ $cat->name_koefisien }}</option> 
                @endforeach 
              </select>
            </div>  
            <div class="col-md-6" style="margin-bottom: 10px;">
              <label for="master_pekerjaan">price</label>
            </div>
            <div class="col-md-6" style="margin-bottorm: 10px;">
              <input type="number" class="form-control" id="up_price">
              <input type="number" class="form-control" id="up_id_raw" hidden>
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