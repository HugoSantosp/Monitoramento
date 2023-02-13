<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monitoramento</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/Assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Assets/dist/css/adminlte.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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


    <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {   
        var time = <?php ?> 

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Time (ms)', 40]
        ]);

        var options = {
          width: 500, height: 220,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);
      }

    </script>
    <section class="content">
      <div class="card text-center" style="width: 16rem; height: 23rem;">
          <div class="card-header">
          <h3></h3>
          </div>

          <div class="card-body">
            <div class="align-middle" id="chart_div" style="width: 400px; height: 120px;"></div>
          </div>

          <div class="card-footer text-muted">
              <h3></h3>
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
            <form method="POST" action="/addServer"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-white" for="exampleInputEmail1">Serve Name</label>
                    <input type="text" class="form-control text-dark" name="servername" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">IP Address Server</label>
                    <input type="text" class="form-control" name="ipadress" id="exampleInputPassword1" >
                  </div>
                </div>  
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>