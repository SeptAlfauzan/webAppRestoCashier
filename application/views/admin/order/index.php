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
  <link href="<?= base_url() ?>assets_template_admin/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url() ?>assets_template_admin/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url() ?>assets_template_admin/Datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_template_admin/Datatables/boostrap.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url() ?>assets_template_admin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">

    <?php $this->load->view('admin/sidebar/index'); ?>

    <div class="main-panel">
      <!-- Navbar -->
      <?php $this->load->view('admin/navbar/index'); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <h1>Data Order/ Pesanan</h1>
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
                      <td>
                      <select class="custom-select text-primary bg-dark border border-0" id="inputGroupSelect01">
                        <option class="border border-0" selected>Choose...</option>
                        <option class="border border-0" value="1">Dibuat</option>
                        <option class="border border-0" value="2">Diantar</option>
                        <option class="border border-0" value="3">Sampai</option>
                      </select>
                      </td>
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
  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>assets_template_admin/js/core/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets_template_admin/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>assets_template_admin/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets_template_admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url() ?>assets_template_admin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url() ?>assets_template_admin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>assets_template_admin/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url() ?>assets_template_admin/demo/demo.js"></script>
  <script src="<?= base_url() ?>assets_template_admin/Datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets_template_admin/Datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#data-tables').DataTable();
    });
  </script>
</body>

</html>