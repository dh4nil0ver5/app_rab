<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>RAB Apps</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ URL::to('assets/dist/css/adminlte.min.css')}}">
  <style>
    .none{ display: none;}
  </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> 
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::to('/') }}" class="brand-link">
      <img src="{{ URL::to('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rab Apps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::to('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
          <li class="nav-item <?php echo $session['menu'] ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Setting Master 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> 
            <ul class="nav nav-treeview" <?php $session['menu_open'] ?>>
              <li class="nav-item">
                <a href="{{ URL::to('pekerjaan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pekerjaan</p>
                </a>
              </li>
              <li class="nav-item <?php echo $session['menu'] ?>">
                <a href="{{ URL::to('sub_pekerjaan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Pekerjaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('item_pekerjaan') }}" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <p>Item Pekerjaan</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('material') }}" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('category') }}" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('formula') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                2. Formula 
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('rab') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                3. RAB 
              </p>
            </a> 
          </li>
          
        </ul>
      </nav>
    </div>
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="content">
      <div class="container-fluid"> 
           @yield('content')
      </div> 
    </div> 
  </div>
  

  <!-- Main Footer -->
  <footer class="main-footer"> 
    Apss Rencana Anggaran Bangunan 
  </footer>
  <!-- ./wrapper -->
</div>

<script src="{{ URL::to('assets/plugins/jquery/jquery.min.js') }}"></script> 
<script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ URL::to('assets/dist/js/adminlte.js') }}"></script> 
<script src="{{ URL::to('assets/plugins/chart.js/Chart.min.js') }}"></script> 
<script src="{{ URL::to('assets/dist/js/demo.js') }}"></script> 
{{-- <script src="{{ URL::to('assets/dist/js/pages/dashboard3.js') }}"></script> --}}
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script> 
  $("#saveUpMaster").click(function() {
    $.ajax({
      type: "post",
      url: "<?php echo url('update/sub/pekerjaan'); ?>",
      data: {
        up_id_work: $("#up_id_work").val(),
        up_id_pointofwork: $("#up_id_pointofwork").val(),
        up_name_ofpointwork: $("#up_name_ofpointwork").val()
      },
      dataType: "json",
      success: function (json) {
        if (parseInt(json['status']) == 200) { 
          $("#updateMaster").modal('toggle');
          Swal.fire('sukses !');
          loaddata();
        } else {
          $("#updateMaster").modal('toggle');
          Swal.fire('error !');
        } 
      }
    });
  });
  $("#saveMaster").click(function() { 
    $.ajax({
      type: "post",
      url: "<?php echo url('save/sub/pekerjaan'); ?>",
      data: {
        id_work: $("#id_work option:selected").val(), 
        id_pointofwork: $("#id_pointofwork").val(),
        name_ofpointwork: $("#name_ofpointwork").val()
      },
      dataType: "json",
      success: function (json) {
        if (parseInt(json['status']) == 200) { 
          $("#newMaster").modal('toggle');
          // $("#id_work option:selected").val(""), 
          $("#id_pointofwork").val("");
          $("#name_ofpointwork").val("");
          Swal.fire('sukses !');
          loaddata();
        } else {
          $("#newMaster").modal('toggle');
          Swal.fire('error !');
          loaddata();
        } 
      }
    });
  });
  function check(param){   
    $.get({
      url: "<?php echo url('/'); ?>/data/subpekerjaan/"+$("#sub"+param).attr('kode'),   
      dataType: 'json',
      success: function (json) { 
        if (parseInt(json['status']) == 200) { 
          $.each(json['data'], function (item, object) {   
              $("#up_id_work").val(object.id_work); 
              $("#up_id_pointofwork").val(object.id_pointofwork); 
              $("#up_name_ofpointwork").val(object.name_ofpointwork);  
          });
          $("#updateMaster").modal('toggle'); 
        } else {
          $("#updateMaster").modal('toggle');
          Swal.fire('error !');
        } 
      }
    });
  }
  function hapus(param){ 
    $.post({
      url: "<?php echo url('/'); ?>/delete/sub/pekerjaan",  
      data: { 
        del_id_pointofwork: $("#sub"+param).attr('kode'), 
      },
      dataType: 'json',
      success: function (json) { 
        if (parseInt(json['status']) == 200) {   
          Swal.fire('sukses !');
          loaddata();
        } else { 
          loaddata();
          Swal.fire('error !');
        } 
      }
    });
  }
  function loaddata(){ 
    $("#lista_proiecte").DataTable().destroy();
    $("#lista_proiecte").DataTable({
        processing: true,
        serverSide: false, 
        bLengthChange: false,
        bPaginate: true,
        bFilter: false,
        bInfo: false,
        ajax: {
          url: "<?php echo url('list_formula'); ?>",
          type: "get",
          dataSrc: function (json) {
            var return_data = new Array();
		        if (parseInt(json['status']) == 200) {  
              $.each(json['data'], function (i, item) { 
	                return_data.push({
                    'no':(i+1),
                    'kode':item.id_pointofwork,
                    'nama_work':item.name_work,
                    'name_ofpointwork':item.name_ofpointwork,
                    'aksi':"<div class='btn btn-xs btn-warning btn-flat' kode='"+item.id_pointofwork+"' id='sub"+i+"' onclick='check("+i+")'>edit</div>"+
                    "<div class='btn btn-xs btn-danger btn-flat' id='sub"+i+"' onclick='hapus("+i+")'>hapus</div>" 
                  });
              });
            }else{
              return_data;
            }
            return return_data;
          }
        },columns: [
          { data: 'no'}, 
          { data: 'kode'},
          { data: 'nama_work'},
          { data: 'name_ofpointwork'}, 
          { data: 'aksi'}, 
        ]
    });
  }
  $(document).ready(function() {
    loaddata();
  });
</script>
</body>
</html>
