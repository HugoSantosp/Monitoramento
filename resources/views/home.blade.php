<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="refresh" content='3'>   
  <title>Monitoramento</title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/Assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/Assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="/Assets/dist/css/adminlte.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body class="hold-transition dark-mode sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Monitoramento</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Servidores
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                 <h1>Adicionar Servidor</h1>
                </button>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
    <div class="card card-solid">
        <div class="card-body ">
          <div class="row" id="servers">

          @foreach ($time as $item)
          <div class=" col-md-3 d-flex align-items-stretch ">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header  border-bottom-0">
                  <h3>{{$item['ServerName']}}</h3>
                </div>

                <div class="card-body pt-0  @if($item['ServerTimeResponse'] <= 20) bg-success @elseif($item['ServerTimeResponse'] == 'Loss' || $item['ServerTimeResponse'] == 'Inalcançável') bg-danger @else bg-warning @endif">
                  <div class="row @if($item['ServerTimeResponse'] <= 20) bg-success @elseif($item['ServerTimeResponse'] == 'Loss' || $item['ServerTimeResponse'] == 'Inalcançável') bg-danger @else bg-warning @endif">
                    <div class="col-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-reception-4 text-white" viewBox="0 0 16 16">
                      <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                    </svg>
                    <p class="fs-1 text-white">{{$item['ServerTimeResponse']}} ms</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                      <h3>{{$item['ServeIp']}}</h3>
                  </div>
                </div>
              </div>
            </div>
            @endforeach          
 
          </div>
        </div>
      </div>


</section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>

<script src="/Assets/plugins/jquery/jquery.min.js"></script>
<script src="/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/Assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/Assets/dist/js/adminlte.js"></script>


<script src="/Assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/Assets/plugins/raphael/raphael.min.js"></script>
<script src="/Assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/Assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="/Assets/plugins/chart.js/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

</body>
</html>


<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Adicionar Servidor ao Monitoramento</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form name="formserver"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-white" for="exampleInputEmail1">Serve Name</label>
                    <input type="text" class="servername form-control text-dark" name="servername" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">IP Address Server</label>
                    <input type="text" class="serveradress form-control" name="ipadress" id="exampleInputPassword1" >
                  </div>
                </div>  
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id='btn-fechar' >Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<script>

  $(function () {
      $('form[name="formserver"]').submit(function(event){
          event.preventDefault();

          $.ajax({
            url:'/addServer',
            type: 'POST',
            data: $(this).serialize(),
            
          }).done( function (response){
              $('#servers').html(response)
          })
         

      })
  })
</script>