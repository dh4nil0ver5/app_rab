<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>RAB Apps</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
          <li class="nav-item"<?php echo $session['menu'] ?>" > 
            <a href="{{ URL::to('formula') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p> 2. Formula </p>
            </a> 
          </li>
          <li class="nav-item" > 
            <a href="{{ URL::to('rab') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p> 3. RAB </p>
            </a>  
          </li>
          
        </ul>
      </nav>
    </div>
</aside>

  <div class="content-wrapper"> 
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
<script src="{{ URL::to('assets/dist/js/pages/dashboard3.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script> 
  function resetSelect() {
      $("#isitabellist").attr("hidden","");
      $("#isitabeluse").show();
    $('#tdkindofraw').prop('selectedIndex', 0);
  }
  function ubah_percen(params) {
    $("#margin").attr('hidden','');
    $("#upMargin").removeAttr('hidden');
  }
  function saves(params) {
    $.post({
      type: "post",
      url: "<?php echo url('update/margin'); ?>",
      data: {
        id_analisa: $("#val_idanalisa").attr('kode'),
        percen_margin: $("#percen_margin_up").val(),
        total_price: $("#res_sum").text(),
        hsp: $("#result").text(),
      },
      dataType: "json",
      success: function (json) {
        if (parseInt(json['status']) == 200) {  
          $("#DetailFormula").modal('toggle');
          loaddata();
          $("#margin").removeAttr('hidden');
          $("#upMargin").attr('hidden','');
        } 
      }
    });
  }
  function closes(params) {
    $("#margin").removeAttr('hidden');
    $("#upMargin").attr('hidden','');
  }
  $("#updateFormula").click(function() {
    $.ajax({
      type: "post",
      url: "<?php echo url('update/material/pekerjaan'); ?>",
      data: {
         id_raw: $("#up_id_raw").val(),
         id_city: $("#up_id_city option:selected").val(),
         id_kindofraw: $("#id_kindofraw option:selected").val(),
         description: $("#up_description").val(),
         quantity: $("#up_quantity").val(),
         code_koef: $("#code_koef option:selected").val(),
         price: $("#up_price").val(),
         modified_date: '<?php echo now(); ?>'
      },
      dataType: "json",
      success: function (json) {
        if (parseInt(json['status']) == 200) { 
          $("#upMaterial").modal('toggle');
          Swal.fire('sukses !');
          loaddata();
        } else {
          $("#upMaterial").modal('toggle');
          Swal.fire('error !');
        } 
      }
    });
  });
  $("#saveFormula").click(function() {
    $.ajax({
      type: "post",
      url: "<?php echo url('save/formula/pekerjaan'); ?>",
      data: { 
        id_categoryformula: $("#id_categoryformula option:selected").val(),
        id_item: $("#id_item option:selected").val(),
        percen_margin: $("#percent_margin").val(),
        status: 1, 
      },
      dataType: "json",
      success: function (json) {
        if (parseInt(json['status']) == 200) { 
          $("#percent_margin").val("");
          $("#newFormula").modal('toggle');  
          loaddata();
          Swal.fire('sukses !');
        } else { 
          loaddata();
          Swal.fire('error !');
        } 
      }
    });
  });
  $("#tdkindofraw").change(function(){   
    var a=$(this).val(); 
    // var c = $("#tdkindofraw option:selected").val(); 
    kosong(a);
  });
  function kosong(a){   
    if (a==0) { 
      $("#isitabeluse").show();
      $("#isitabellist").attr("hidden","");
    } else {
      $("#isitabeluse").hide();
      $("#list_data_formula").DataTable().destroy();
      $("#list_data_formula").DataTable({
          processing: true,
          serverSide: false, 
          bLengthChange: false,
          bPaginate: true,    
          bFilter: false,
          bInfo: false,
          ajax: {
            url: 'data/formula/jenis/'+a,
            type: "get",
            dataSrc: function (json) {
              var return_data = new Array();
              if (parseInt(json['status']) == 200) {  
                $.each(json['data'], function (i, item) {  
                    return_data.push({ 
                      'no':(i+1),
                      'name_ofitem':item.name_raw,
                      'category':item.kind,
                      'qty':item.qty, 
                      'price':'<p id="a'+(i+1)+'">'+item.price+'<p>', 
                      'aksi':
                      "<div class='btn btn-xs btn-primary btn-flat' "+
                      "name_raw='"+item.name_raw+"' "+
                      "category='"+item.kind+"' "+
                      "qty='"+item.qty+"' "+
                      "price='"+item.price+"' "+
                      "kode='"+item.id_analisa+"' "+
                      "id_raw='"+item.id_raw+"' "+
                      "id_city='"+item.id_kabkot+"' "+
                      "id_kindofraw='"+item.id_kindofraw+"' "+
                      "id='pas"+i+"' onclick='pilih("+i+")'>pilih</div>"
                      // "<div class='btn btn-xs btn-danger btn-flat' id='asub"+i+"' onclick='hapus("+i+")'>hapus</div>" 
                    });
                });
                $("#isitabeluse").hide();
              }else{
                return_data;
              }
              return return_data;
            }
          },columns: [
            { data: 'no'}, 
            { data: 'name_ofitem'}, 
            { data: 'category'}, 
            { data: 'qty'},   
            { data: 'price'},  
            { data: 'aksi'},  
          ]
      });
      $("#isitabellist").removeAttr("hidden");
    }
  }
  function pilih(param){  
    var id_analisa = $("#tdkindofraw").attr("kode"); 
    var id_raw = $("#pas"+param).attr('kode');
    console.log(id_analisa+' 11 '+id_raw);
    $.ajax({
      type: "post",
      url: "<?php echo url('save/material/pekerjaan'); ?>",
      data: {
        id_analisa: id_analisa,
        id_raw: id_raw,
        id_city: $("#pas"+param).attr('id_city'),
        id_kindofraw: $("#pas"+param).attr('id_kindofraw'),
        description: $("#pas"+param).attr('name_raw'),
        category: $("#pas"+param).attr('category='),
        quantity: $("#pas"+param).attr('qty'),
        price: $("#pas"+param).attr('price') 
      },
      dataType: "json",
      success: function (json) {
        if (parseInt(json['status']) == 200) {  
          $("#DetailFormula").modal("toggle");
          resetSelect();
        } else { 
          $("#DetailFormula").modal("toggle");
          resetSelect();
        } 
      }
    });
  }
  // function check(param){   
  //   console.log($("#sub"+param).attr('kode'));
  //   $.get({
  //     url: "<?php echo url('/'); ?>/data/formula/pekerjaan/"+$("#sub"+param).attr('kode'), 
  //     dataType: 'json',
  //     success: function (json) { 
  //       if (parseInt(json['status']) == 200) {  
  //         $("#DetailFormula").modal('toggle'); 
  //       } else {
  //         $("#DetailFormula").modal('toggle'); 
  //       } 
  //     }
  //   });
  // }
  function detail(param){  
    $("#tdkindofraw").attr("kode",$("#asub"+param).attr('kode'));
    $("#val_idanalisa").attr("kode",$("#asub"+param).attr('kode'));
    $("#tombol_aksi").hide();
    $("#using_list_data_formula").DataTable().destroy();
    $("#using_list_data_formula").DataTable({
        processing: true,
        serverSide: false, 
        bLengthChange: false,
        bPaginate: false,    
        bFilter: false,
        bInfo: false,
        ajax: {
          url: 'data/formula/pekerjaan/kategori/'+$("#asub"+param).attr('kode'),
          type: "get",
          dataSrc: function (json) {
            var return_data = new Array();
		        if (parseInt(json['status']) == 200) {  
              var dump_val = [];
              $.each(json['data'], function (i, item) {  
                  dump_val.push(parseInt(item.price));
	                return_data.push({ 
                    'no':(i+1),
                    'name_ofitem':item.name_raw,
                    'category':item.kind,
                    'qty':item.qty, 
                    'price':'<p id="a'+i+'">'+item.price+'</p>', 
                    // 'aksi':
                    // "<div class='btn btn-xs btn-primary btn-flat' kode='"+item.id_analisa+"' id='asub"+i+"' onclick='detail("+i+")'>detail</div>"+
                    // "<div class='btn btn-xs btn-danger btn-flat' id='asub"+i+"' onclick='hapus("+i+")'>hapus</div>" 
                  });
              });
              // $("#margin").text(json['tdformula'][0]['percen_margin']);
              harga = dump_val.reduce((a, b) => a + b, 0);
              pc = json['tdformula'][0]['percen_margin'];
              res = harga*(pc/100);
              $("#margin").text(res);
              $("#res_sum").text(dump_val.reduce((a, b) => a + b, 0));
              $("#result").text(harga+res); 
              $.post({
                type: "post",
                url: "<?php echo url('update/margin'); ?>",
                data: {
                  id_analisa: $("#asub"+param).attr('kode'),
                  percen_margin: $("#percen_margin_up").val(),
                  total_price: $("#res_sum").text(),
                  hsp: $("#result").text(),
                },
                dataType: "json",
                success: function (json) {
                  if (parseInt(json['status']) == 200) {   
                    loaddata();
                    $("#margin").removeAttr('hidden');
                    $("#upMargin").attr('hidden','');
                  } 
                }
              });
            }else{
              return_data;
            }
            return return_data;
          }
        },columns: [
          { data: 'no'}, 
          { data: 'name_ofitem'}, 
          { data: 'category'}, 
          { data: 'qty'},   
          { data: 'price'},  
          // { data: 'aksi'},  
        ]
    }); 
    $("#DetailFormula").modal('toggle'); 
  }
  function hapus(param){ 
    $.post({
      url: "<?php echo url('/'); ?>/delete/formula/pekerjaan",  
      data: { 
        id_analisa: $("#asub"+param).attr('kode'), 
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
    $("#list_formula").DataTable().destroy();
    $("#list_formula").DataTable({
        processing: true,
        serverSide: false, 
        bLengthChange: false,
        bPaginate: true,
        bFilter: false,
        bInfo: false,
        ajax: {
          url: 'data/formula/pekerjaan',
          type: "get",
          dataSrc: function (json) {
            var return_data = new Array();
		        if (parseInt(json['status']) == 200) {  
              $.each(json['data'], function (i, item) {  
	                return_data.push({
                    'no':(i+1),
                    'name_ofitem':item.name_ofitem,
                    'category':item.category,
                    'percen_margin':item.percen_margin, 
                    'aksi':
                    "<div class='btn btn-xs btn-primary btn-flat' kode='"+item.id_analisa+"' id='asub"+i+"' onclick='detail("+i+")'>detail</div>"+
                    "<div class='btn btn-xs btn-danger btn-flat' kode='"+item.id_analisa+"' id='asub"+i+"' onclick='hapus("+i+")'>hapus</div>" 
                  });
              });
            }else{
              return_data;
            }
            return return_data;
          }
        },columns: [
          { data: 'no'}, 
          { data: 'name_ofitem'}, 
          { data: 'category'}, 
          { data: 'percen_margin'},   
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
