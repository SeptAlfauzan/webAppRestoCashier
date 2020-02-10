<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script src="https://kit.fontawesome.com/c4c0d125c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>zawarudo</title>
</head>

<body class="p-0 m-0 bg-white">
    <nav>
        <div class="nav mb-0 navigation-menu justify-content-center justify-content-md-end bg-white border-top container" id="nav-tab" role="tablist">

            <div class="pt-4 mr-auto" id="search-bar-md">
                <form class="form-inline">
                    <!-- <a class="d-inline" href="#">
                        <img src="assets/illustration/icon/food.svg" class="col-3 m-0 p-0" alt="" srcset="">
                        <span class="font-weight-bold text-dark ml-0 fa-2x">EatNow</span>
                    </a> -->
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="password" class="form-control badge-pill" id="inputPassword2" placeholder="Cari menu">
                    </div>
                    <button type="submit" class="btn btn-outline-secondary rounded-circle mb-2">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <a class="nav-link text-menu active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                <i class="fas fa-home fa-2x ic-menu"></i>
                <br>
                Home
            </a>
            <a class="nav-link text-menu" data-toggle="tab" href="#activity" role="tab" aria-controls="activity"
                aria-selected="true">
                <i class="fas fa-tasks fa-2x ic-menu"></i>
                <br>
                Activity
            </a>
            <a class="nav-link text-menu" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="true">
                <i class="fas fa-wallet fa-2x ic-menu"></i>
                <br>
                Payment
            </a>
            <a class="nav-link text-menu" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">
                <i class="fas fa-user-circle fa-2x ic-menu"></i>
                <br>
                Account
            </a>
        </div>
    </nav>

    <div class="tab-content p-0 m-0 col-12">
        <div id="home" role="tabpanel" aria-labelledby="home-tab"
            class="tab-pane fade show active container mt-md-5 mt-0 mb-3 bg-white p-0 rounded">
            <div class="row col-12 p-banner mb-0 m-0 rounded">

                <div class="alert alert-info alert-dismissible fade show col-12" role="alert">
                    <strong>Pesanan anda sedang dibuat,</strong> harap tunggu sebentar ☺.
                    <button type="button" class="close m-auto" data-dismiss="alert" aria-label="Close">
                        <i class="far fa-times-circle fa-1x"></i>
                    </button>
                </div>

                <div class="col-md-6 col-12 pl-md-5 pl-0 pt-3 pb-3">
                    <h1 class="font-weight-bold">Mau <span class="text-warning">makan</span> apa anda hari ini?</h1>
                </div>
                <div class="col-md-6 col-12 pt-3 pb-3">
                    <img src="assets/illustration/undraw_breakfast_psiw.svg" class="col-12 m-0 p-0" alt="" srcset="">
                </div>   
            </div>

            <ul class="nav nav-pills mt-0 justify-content-center row col-md-6 col-12 m-auto p-0" id="card-category" role="tablist">
                <li class="nav-item p-md-3 p-2 col-4">
                    <a class="nav-link active bg-white shadow m-auto p-3" id="best-deal-tab" data-toggle="pill" href="#best-deal" role="tab"
                        aria-controls="pills-home" aria-selected="true">
                        <img src="assets/illustration/icon/money.svg" alt="" class="col-md-4 col-5 m-0 p-0">
                        <span class="text-category">
                            Best deal
                        </span>
                    </a>
                </li>
                <li class="nav-item p-md-3 p-2 col-4">
                    <a class="nav-link bg-white shadow m-auto p-3" id="food-tab" data-toggle="pill" href="#food" role="tab"
                        aria-controls="pills-profile" aria-selected="false">
                        <img src="assets/illustration/icon/pasta.svg" alt="" class="col-md-4 col-5 m-0 p-0">
                        <span class="text-category">
                            Food
                        </span>
                    </a>
                </li>
                <li class="nav-item p-md-3 p-2 col-4">
                    <a class="nav-link bg-white shadow m-auto p-3" id="beverage-tab" data-toggle="pill" href="#beverage" role="tab"
                        aria-controls="pills-contact" aria-selected="false">
                        <img src="assets/illustration/icon/cocktail.svg" alt="" class="col-md-4 col-5 m-0 p-0">
                        <span class="text-category">
                            Beverage
                        </span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="best-deal" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col-md-10 m-auto col-12 pt-0 p-md-0 p-4">    
                        <h4>Best deal for you!</h4>
                    </div>
                    <div class="slick m-auto col-10 p-0 pb-5 pb-md-0 ">
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 shadow bg-white zoom rounded">
                            <img class="img-menu rounded" src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col-md-10 m-auto col-12 pt-4 p-md-0 p-4 ">
                    <h4>Food to eat.</h4>
                    </div>
                    <div class="slick-menu m-auto col-10 p-0 pb-5 pb-md-0">
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 shadow bg-white zoom rounded">
                            <img class="img-menu rounded" src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="beverage" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="col-md-10 m-auto col-12 pt-4 p-md-0 p-4 ">
                    <h4>Beverage to drink</h4>
                    </div>
                    <div class="slick-menu m-auto col-10 p-0 pb-5 pb-md-0">
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 shadow bg-white zoom rounded">
                            <img class="img-menu rounded" src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                        <a href="<?= base_url('DetailMenu')?>" class="p-0 nav-link m-2 border shadow bg-white zoom rounded">
                            <img class="img-menu rounded"
                                src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                            <div class="p-3">
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                                <br>
                                <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div id="activity" role="tabpanel" aria-labelledby="activity-tab"
            class="tab-pane fade container mt-md-5 mt-0 bg-white pt-3 pb-4 rounded shadow-lg activity-container" id="">
            <h4 class="ml-3">Activity</h4>
            <a href="#" class="nav-link col-12 p-0 m-1 justify-content-center" data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="alert alert-info row col-12 m-auto" role="alert">
                    <img src="assets/illustration/icon/order.svg" class="icon p-0 m-0" alt="" srcset="">
                    <div class="ml-3 p-0">
                        <div class="font-weight-bold">Lorem....</div>
                        <div class="d-block">
                            <span>Meja 4</span>
                            <span>Sudah diantar</span>
                        </div>
                    </div>
                    <div class="ml-auto font-wight-light">30 jan</div>
                </div>
            </a>
            <div class="modal fade bd-example-modal-xl m-0 col-12 modal-activity" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl justify-content-center" role="document">
                    <div class="modal-content bg-light p-3 col-md-6 col-12 m-auto">
                        <div class="col-12 rounded bg-white m-2 row">
                            <img src="assets/illustration/icon/order.svg" class="icon p-0 m-0" alt="" srcset="">
                            <h4 class="text-secondary">Nama pesanan</h4>
                        </div>
                        <div class="col-12 rounded bg-white m-2 row">
                            <img src="assets/illustration/icon/desk.svg" alt="" class="icon p-0 m-0">
                            <h4 class="text-secondary">Nomer meja</h4>
                        </div>
                        <div class="col-12 rounded bg-white m-2">
                            <h3 class="text-secondary">Detail pesanan</h3>
                            <span class="d-block">1x lorem</span>
                            <span class="d-block">1x lorem</span>
                            <span class="d-block">1x lorem</span>
                            <h5 class="text-secondary">Total</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="nav-link col-12 p-0 m-1 justify-content-center" data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="alert alert-info row col-12 m-auto" role="alert">
                    <img src="assets/illustration/icon/order.svg" class="icon p-0 m-0" alt="" srcset="">
                    <div class="ml-3 p-0">
                        <div class="font-weight-bold">Lorem....</div>
                        <div class="d-block">
                            <span>Meja 4</span>
                            <span>Sudah diantar</span>
                        </div>
                    </div>
                    <div class="ml-auto font-wight-light">30 jan</div>
                </div>
            </a>
            <a href="http://" class="nav-link col-12 p-0 m-1 justify-content-center">
                <div class="alert alert-info row col-12 m-auto" role="alert">
                    <img src="assets/illustration/icon/order.svg" class="icon p-0 m-0" alt="" srcset="">
                    <div class="ml-3 p-0">
                        <div class="font-weight-bold">Lorem....</div>
                        <div class="d-block">
                            <span>Meja 4</span>
                            <span>Sudah diantar</span>
                        </div>
                    </div>
                    <div class="ml-auto font-wight-light">30 jan</div>
                </div>
            </a>
        </div>

        <div id="payment" role="tabpanel" aria-labelledby="activity-tab"
            class="tab-pane fade container mt-md-5 mt-0 mb-10 bg-white pt-3 pb-4 rounded">
            
            <!-- transaksi tidak ada -->
            <!-- <div class="col-12 row p-0">
                <div class="col-md-6 col-12 p-4">
                        <h1 class="text-secondary mt-md-5 mt-0 pt-md-5 pt-0 text-center">
                            Belum ada transaksi untuk saat ini.
                        </h1>
                </div>
                <img src="assets/illustration/undraw_Credit_card_3ed6.svg" class="col-md-6 col-12" alt="" srcset="">
            </div> -->

            <div class="col-12">
                <h1 class="font-weight-light text-center">Kode rahasia untukmu.</h1>
                <div class="col-12 text-center">
                    <img src="assets/illustration/undraw_reading_0re1.svg" alt="" class="col-md-6 col-12">
                </div>
                <h2 class="font-weight-bold text-center text-main mt-3">FSSAF8124</h2>
                <div class="text-secondary text-center m-auto">Berikan kode ini kepada kasir untuk konfirmasi pesanan anda</div>
            </div>
        </div>

        <div id="account" role="tabpanel" aria-labelledby="activity-tab"
            class="tab-pane fade container mt-5 mb-10 bg-white pt-3 pb-4 rounded shadow-lg">
            <div class="col-12 p-0 row">
                <div class="col-md-6 col-12 order-md-2 order-1 text-md-center text-left">
                    <i class="fas fa-user-circle text-main fa-5x m-auto pl-3 pl-md-0"></i>
                    <h3 class="pl-3 pl-0">Lorem, ipsum dolor.</h3>
                    <!-- Button trigger modal -->
                    <a style="cursor: pointer;" class="nav-link text-secondary text-md-center text-left" data-toggle="modal" data-target="#exampleModalCenter">
                        Edit profil <i class="fas fa-chevron-right"></i>
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 order-md-1 order-2 mt-3 mt-md-0 p-md-4 p-auto">
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>
                    <div class="col-12 border-bottom pb-2">Lorem ipsum dolor sit.</div>

                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.slick').slick({
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                speed: 300,
                variableWidth: true
            });
    </script>
    <script>
        $('.slick-menu').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            speed: 300,
            variableWidth: true
        });
    </script>
</body>

</html>