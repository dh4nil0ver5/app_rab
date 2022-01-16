<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>RAB Apps</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
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
        <!-- <div class="navbar-search-block">
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
        </div> -->
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
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Setting Master 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::to('pekerjaan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pekerjaan</p>
                </a>
              </li>
              <li class="nav-item">
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
          <li class="nav-item" > 
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

  <div class="content-wrapper"> 
    <div class="content">
      <div class="container-fluid"> 
      <?php 
        if ($session['status']==200) {
          echo $session['pesan'];
        } else {
          echo $session['pesan'];
        } ?>
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
<script src="{{ URL::to('assets/dist/js/pages/dashboard3.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>  
  function check(param){   
    $.get({
      url: 'data/project/'+$("#sub"+param+"").attr("kode"),  
      dataType: 'json',
      success: function (json) { 
        if (parseInt(json['status']) == 200) { 
              $.each(json['data'], function (i, item) { 
                $("input[name='up_id_project']").val(item.id_project);
                $("input[name='up_name_project']").val(item.name_project);
                $("input[name='up_work_project']").val(item.work_project);
                $("input[name='up_revisi']").val(item.revisi);
                $("input[name='up_location']").val(item.location);
                $("input[name='up_lokasi_file']").val(item.lokasi_file);
                $("input[name='up_no_rab']").val(item.no_rab);
                $("input[name='up_code_picture']").val(item.code_picture); 
                $("input[name='up_nama_file']").val(item.nama_picture); 
              }); 
          $("#updateProject").modal('toggle'); 
        } else {
          $("#updateProject").modal('toggle');
          Swal.fire('error !');
        } 
      }
    });
  }
  function hapus(param){ 
    $.post({
      url: "<?php echo url('/'); ?>/delete/project",  
      data: {
        id_project: $("#sub"+param+"").attr("kode")
      },
      dataType: 'json',
      success: function (json) { 
        if (parseInt(json['status']) == 200) {   
          Swal.fire('sukses !');
          loadproject();
        } else { 
          loadproject();
          Swal.fire('error !');
        } 
      }
    });
  }
  function loadproject(){
    $("#list_project").DataTable().destroy();
    $("#list_project").DataTable({
        processing: true,
        serverSide: false, 
        bLengthChange: false,
        bPaginate: true,
        bFilter: false,
        bInfo: false,
        ajax: {
          url: "<?php echo url('data/project'); ?>",
          type: "get",
          dataSrc: function (json) {
            var return_data = new Array();
		        if (parseInt(json['status']) == 200) {  
              $.each(json['data'], function (i, item) { 
	                return_data.push({
                    'no':(i+1),
                    'name_project':item.name_project,
                    'work_project':item.work_project, 
                    'location':item.location,
                    'lokasi_file':item.lokasi_file,
                    'code_picture':item.code_picture,
                    'no_rab':item.no_rab,
                    'name_picture':item.name_picture, 
                    'aksi':
                    "<div class='btn btn-xs btn-warning btn-flat' kode='"+item.id_project+"' id='sub"+i+"' onclick='check("+i+")'>edit</div>"+
                    "<div class='btn btn-xs btn-danger btn-flat' kode='"+item.id_project+"' id='sub"+i+"' onclick='hapus("+i+")'>hapus</div>" 
                  });
              });
            }else{
              return_data;
            }
            return return_data;
          } 
        },columns: [
          { data: 'no'}, 
          { data: 'name_project'},
          { data: 'work_project'}, 
          { data: 'location'},
          { data: 'lokasi_file'},
          { data: 'code_picture'},
          { data: 'no_rab'},
          { data: 'name_picture'},
          { data: 'aksi'}, 
        ]
      });
  } 
  function loaddata(){  
  }
  $(document).ready(function() {
    loadproject();
  });
</script>
</body>
</html>
