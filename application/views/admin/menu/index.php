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
                                <h1>Daftar Menu</h1>
                                <!-- Button trigger modal -->
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Tambah menu
                                    </a>
                                </p>
                                <div class="collapse bg-light-purple p-3" id="collapseExample">
                                    <div class="bg-light-purple">
                                        <?= form_open_multipart('AdminManager/upload_menu') ?>
                                        <div class="custom-file form-group">
                                            <input name="image" type="file" class="custom-file-input" id="inputImage" required>
                                            <label class="custom-file-label" for="validatedCustomFile"> <span id="imageLabel" >Pilih foto masakan/minuman</span></label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama masakan</label>
                                            <input name="nama_masakan" type="text" class="form-control border border-primary" id="exampleFormControlInput1" placeholder="masukkan nama masakan">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Harga(Rupiah)</label>
                                            <input name="harga_masakan" type="number" min="0" class="form-control border border-primary" id="exampleFormControlInput1" placeholder="cth: 5000">
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
                                        <div class="col-12 col-md-6 ml-auto row m-0">
                                            <div class="col-md-6 col-12 p-1">
                                                <button type="button" class="btn btn-outline-primary col-12 m-0" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Close</button>
                                            </div>
                                            <div class="col-md-6 col-12 p-1">
                                                <button type="submit" class="btn btn-primary col-12 m-0">Save changes</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <table id="data-tables" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td>Menu</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($menus as $menu) { ?>
                                            <tr class="d-inline-block col-4 border-0">
                                                <td>
                                                    <div class="card" style="width: 18rem;">
                                                        <img class="card-img-top" src="<?= base_url() ?>images/<?= $menu['foto_masakan'] ?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $menu['nama_masakan'] ?></h5>
                                                            <p class="card-text"><span class="text-secondary">Harga</span> Rp<?= $menu['harga'] ?></p>
                                                            <p class="card-text"><span class="text-secondary">Kategori </span><?= $menu['kategori'] ?></p>
                                                            <p class="card-text"><span class="text-secondary">Status </span><?= $menu['status_masakan'] ?></p>
                                                            <a href="<?= base_url('AdminManager/edit_menu') ?>?id_masakan=<?= $menu['id_masakan'] ?>" class="btn btn-primary">
                                                                <i class="tim-icons icon-pencil"></i>
                                                            </a>
                                                            <a href="<?= base_url('AdminManager/delete_menu') ?>?id_masakan=<?= $menu['id_masakan'] ?>" class="btn btn-danger">
                                                                <i class="tim-icons icon-trash-simple"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="text-dark">
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="text-dark" for="exampleFormControlInput1">Email address</label>
                                                                                <input type="email" class="form-control text-dark" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="text-dark" for="exampleFormControlSelect1">Example select</label>
                                                                                <select class="form-control text-dark" id="exampleFormControlSelect1">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="text-dark" for="exampleFormControlSelect2">Example multiple select</label>
                                                                                <select multiple class="form-control text-dark" id="exampleFormControlSelect2">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="text-dark" for="exampleFormControlTextarea1">Example textarea</label>
                                                                                <textarea class="form-control text-dark" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="d-inline-block col-4 border-0">
                                            <td>
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="tim-icons icon-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="tim-icons icon-trash-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
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
    <script>
        var imageLabel = $('#imageLabel');
        $('#inputImage').change(function(){
            var inputval = $('#inputImage').val();
            var length = inputval.length;
            imageLabel.html(inputval);
        })
    </script>
</body>

</html>