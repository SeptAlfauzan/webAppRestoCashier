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
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
</head>

<body class="">
    <div class="wrapper">

        <div>
            <!-- Navbar -->
            <!-- <?php $this->load->view('admin/navbar/index'); ?> -->
            <!-- End Navbar -->
            <div class="content">
                <div class="row col-md-6 col-12 rounded mt-4 m-auto border border-danger">
                    <div class="modal-body">
                        <?php foreach ($menus as $menu) { ?>

                            <?= form_open_multipart('AdminManager/do_edit_menu?id='.$menu["id_masakan"]) ?>
                            <img class="img-menu" src="<?= base_url() ?>images/<?= $menu['foto_masakan'] ?>" alt="Card image cap" id="img_edit_<?= $menu['id_masakan'] ?>">
                            <div class="custom-file form-group">
                                <input name="image" value="<?= ?>" type="file" class="custom-file-input" id="validatedCustomFile" >
                                <label class="custom-file-label" for="validatedCustomFile">Pilih foto masakan/minuman</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama masakan</label>
                                <input name="nama_masakan" value="<?= $menu['nama_masakan'] ?>" type="text" class="form-control border border-primary" id="exampleFormControlInput1" placeholder="masukkan nama masakan">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Harga(Rupiah)</label>
                                <input name="harga_masakan" value="<?= $menu['harga'] ?>" type="number" min="0" class="form-control border border-primary" id="exampleFormControlInput1" placeholder="cth: 5000">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select name="id_kategori_masakan" class="form-control border border-primary bg-light-purple" id="exampleFormControlSelect1">
                                    <option value="1">masakan</option>
                                    <option value="2">minuman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Status masakan</label>
                                <select name="status_masakan" multiple class="form-control border border-primary" id="exampleFormControlSelect2">
                                    <option value="1">tersedia</option>
                                    <option value="0">tidak tersedia</option>
                                </select>
                            </div>
                            <div class="row col-12 p-0 m-0">
                                <a href="<?= base_url('AdminManager/menu') ?>" class="col-md-6 col-12">
                                    <button class="btn btn-secondary col-12">
                                        kembali
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-primary col-md-6 col-12">
                                    simpan
                                </button>
                            </div>
                            </form>
                        <?php } ?>
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
</body>

</html>