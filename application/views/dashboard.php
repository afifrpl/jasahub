<?php  ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data_siswa | M.A</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap/dist/css/bootstrap.min.css"; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/font-awesome/css/font-awesome.min.css"; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/Ionicons/css/ionicons.min.css"; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"; ?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/skin-blue.min.css"; ?>">
  <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets\bower_components\datatables.net-bs\css\dataTables.bootstrap.css"; ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url('index.php/control_dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Data_Siswa</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <!-- Tasks Menu -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <?php 
              $database = $this->db->get_where('user', array('id' => $this->session->id))->result_array();
              foreach ($database as $key) {
               ?>
              <img src="<?php echo base_url()."hasil_resize/".$key['foto']; ?>" class="user-image" alt="User Image">
              <?php } ?>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php 
                  $database = $this->db->get_where('user', array('id' => $this->session->id))->result_array();
                  foreach ($database as $key) {
                    echo $key['full_name'];
                  }
               ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url()."hasil_resize/".$key['foto']; ?>"" class="img-circle" alt="User Image">

                <p>
                  <?php 
                  $database = $this->db->get_where('user', array('id' => $this->session->id))->result_array();
                  foreach ($database as $key) {
                    echo $key['full_name'];
                  }
               ?> - User Website
                  <small>Member since jan. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/control_dashboard/keluar/') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/hasil_resize/'.$key['foto']) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            <?php echo $key['full_name']; ?>
          </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active">><a href="?halaman=mahasiswa">
            <i class="fa fa-graduation-cap"></i> <span>Mahasiswa</span></a></li>
        <li><a href="?halaman=grafik"><i class="fa fa-bar-chart"></i> <span>Chart</span></a></li>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
      </ol>
    </section>

      <!-- Main content -->
    <section class="content" >
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> <?php 
                  echo $this->db->get_where('mahasiswa', array('id_user' => $this->session->id, 'alamat' => 'Laki-laki'))->num_rows();
               ?></h3>

              <p>Siswa Laki-laki</p>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php 
            echo $this->db->get_where("mahasiswa", array('alamat' => 'Perempuan', 'id_user' => $this->session->id))->num_rows();
             ?></h3>

              <p>Perempuan</p>
            </div>
            <div class="icon">
              <i class="fa fa-female"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
   <?php 
    if (!isset($_GET['halaman'])) 
    {
       
    }
    else{
      if ($_GET['halaman'] == 'mahasiswa') {
        $this->load->view('mahasiswa');//
      }
      else if($_GET['halaman'] == 'grafik'){
        $this->load->view('mahasiswa_grafik');//
      }
      else if($_GET['halaman'] == 'grafik2'){
        $this->load->view('mahasiswa2_grafik');//
      }
      else if ($_GET['halaman'] == 'tambah') {
        $this->load->view('tambah');//
      }
    }?>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Muhammad_Afif</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/bower_components/jquery/dist/jquery.min.js"; ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/bower_components/bootstrap/dist/js/bootstrap.min.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/dist/js/adminlte.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url()."assets\bower_components\datatables.net\js\jquery.dataTables.js"; ?>"></script>
<script typer="text/javascript" src="<?php echo base_url()."assets\bower_components\datatables.net-bs\js\dataTables.bootstrap.js" ?>"></script>
<script type="text/javascript">
  $('.datatable').dataTable();
</script>
<script src="<?php echo base_url()."assets/code/highcharts.js"; ?>"></script>
<script src="<?php echo base_url()."assets/code/modules/exporting.js"; ?>"></script>
<script type="text/javascript">
// Make monochrome colors
var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());

// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Mahasiswa'
    },
    tooltip: {
        pointFormat: 'Jumlah Data Siswa'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        data: [
            { name: 'Jember', y: <?php 
            echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Jember', 'id_user' => $this->session->id))->num_rows();
             ?> },
            { name: 'Kediri', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Kediri', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Lumajang', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Lumajang', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Probolinggo', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Probolinggo', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Malang', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Malang', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Madiun', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Madiun', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Magetan', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Magetan', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Situbondo', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Situbondo', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Bondowoso', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Bondowoso', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Surabaya', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Surabaya', 'id_user' => $this->session->id))->num_rows(); ?> },
        ]
    }]
});
        </script>
        <script type="text/javascript">

Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Siswa'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Jumlah Data Siswa</b>'
    },
     series: [{
        name: 'Brands',
        data: [
           { name: 'Jember', y: <?php 
            echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Jember', 'id_user' => $this->session->id))->num_rows();
             ?> },
            { name: 'Kediri', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Kediri', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Lumajang', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Lumajang', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Probolinggo', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Probolinggo', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Malang', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Malang', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Madiun', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Madiun', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Magetan', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Magetan', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Situbondo', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Situbondo', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Bondowoso', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Bondowoso', 'id_user' => $this->session->id))->num_rows(); ?> },
            { name: 'Surabaya', y: <?php echo $this->db->get_where("mahasiswa", array('jenis_kelamin' => 'Surabaya', 'id_user' => $this->session->id))->num_rows(); ?> },
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
    </script>
        <script type="text/javascript">
          
          $(document).on("click",".btn-edit-data", function(){
            id = $(this).data('id');
            nama = $(this).data('nama');
            kota_asal = $(this).data('kota_asal');
            tanggal_lahir = $(this).data('tanggal_lahir');
            jurusan = $(this).data('jurusan');
            alamat = $(this).data('alamat');
            jenis_kelamin = $(this).data('jenis_kelamin');
            $(".id").val(id);
            $("#nama").val(nama);
            $("#jenis_kelamin").val();
            $("#jurusan").val(jurusan);
            $("#tanggal_lahir").val(tanggal_lahir);
            $("#alamat").val(alamat);
            $("#kota_asal").val(kota_asal);
            $("#jenis_kelamin").val(jenis_kelamin);
          })
        </script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>