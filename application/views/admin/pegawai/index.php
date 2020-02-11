<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url()?>assets_template_admin/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url()?>assets_template_admin/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url()?>assets_template_admin/Datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets_template_admin/Datatables/boostrap.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>assets_template_admin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">

    <?php $this->load->view('admin/sidebar/index');?>
    
    <div class="main-panel">
      <!-- Navbar -->
      <?php $this->load->view('admin/navbar/index');?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <h1>Data Pegawai</h1>
              </div>
              <div class="card-body p-4">
                <table id="data-tables" class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID USER</td>
                            <td>USERNAME</td>
                            <td>NAMA USER</td>
                            <td>PASSWORD</td>
                            <td>STATUS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID USER</td>
                            <td>USERNAME</td>
                            <td>NAMA USER</td>
                            <td>PASSWORD</td>
                            <td>STATUS</td>
                        </tr>
                        <tr>
                            <td>ID USER</td>
                            <td>USERNAME</td>
                            <td>NAMA USER</td>
                            <td>PASSWORD</td>
                            <td>STATUS</td>
                        </tr>
                        <tr>
                            <td>ID USER</td>
                            <td>USERNAME</td>
                            <td>NAMA USER</td>
                            <td>PASSWORD</td>
                            <td>STATUS</td>
                        </tr>
                        <tr>
                            <td>ID USER</td>
                            <td>USERNAME</td>
                            <td>NAMA USER</td>
                            <td>PASSWORD</td>
                            <td>STATUS</td>
                        </tr>
                    </tbody>
                </table>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url()?>assets_template_admin/js/core/jquery.min.js"></script>
  <script src="<?= base_url()?>assets_template_admin/js/core/popper.min.js"></script>
  <script src="<?= base_url()?>assets_template_admin/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets_template_admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url()?>assets_template_admin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url()?>assets_template_admin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url()?>assets_template_admin/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url()?>assets_template_admin/demo/demo.js"></script>
  <script src="<?= base_url()?>assets_template_admin/Datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>assets_template_admin/Datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#data-tables').DataTable();
    });
  </script>
</body>

</html>