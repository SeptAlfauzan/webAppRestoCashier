<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    
    <script src="https://kit.fontawesome.com/c4c0d125c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/costum-input-number.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>zawarudo</title>
</head>
<body class="bg-light">
    <a href="<?= base_url()?>" class="position-absolute">
        <button class="back-button"><i class="fas fa-arrow-left text-white"></i></button>
    </a>
    <div class="col-12 m-0 p-0 position-relative">
        <img src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="col-12 p-0 img-detail position-relative">
        <div class="img-detail-overlay"></div>
        <h1 class="position-absolute text-white text-detail-food">Lorem, ipsum dolor.</h1>
    </div>
    <div class="col-8 col-md-4 rounded bg-white shadow-lg m-auto card-detail-info p-0">
        <div class='ctrl m-auto col-sm-6 col-12'>
            <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
            <div class='ctrl__counter'>
                <input class='ctrl__counter-input' maxlength='10' type='text' value='0'>
                <div class='ctrl__counter-num'>0</div>
            </div>
            <div class='ctrl__button ctrl__button--increment'>+</div>
        </div>
        <button class="btn btn-success rounded col-12 m-0" id="btn-buy">
            Beli
        </button>
    </div>
    <div class="container mt-5">
        <div class="col-10 p-0 m-auto">
            <h3 class="font-weight-light">Menu lainnya</h3>
        </div>
        <div class="slick-menu m-auto col-10 p-0">
            <div class="m-2 border border-secondary bg-white zoom rounded">
                <img class="img-menu rounded"
                    src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    alt="">
                <div class="p-3">
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                    <br>
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                </div>
            </div>
            <div class="m-2 border border-secondary bg-white zoom rounded">
                <img class="img-menu rounded"
                    src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    alt="">
                <div class="p-3">
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                    <br>
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                </div>
            </div>
            <div class="m-2 border border-secondary bg-white zoom rounded">
                <img class="img-menu rounded"
                    src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    alt="">
                <div class="p-3">
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                    <br>
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                </div>
            </div>
            <div class="m-2 border border-secondary bg-white zoom rounded">
                <img class="img-menu rounded"
                    src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    alt="">
                <div class="p-3">
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                    <br>
                    <span class="text-secondary text-menu-detail">Lorem ipsum dolor sit.</span>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success rounded-0 col-12 m-0" id="smartphone-btn-buy">
        Beli
    </button>
</body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="assets/js/costum-input-number.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.slick-menu').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            speed: 300,
            variableWidth: true
        });
    </script>

</html>