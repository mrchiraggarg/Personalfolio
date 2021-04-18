<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <!--google font -->
        <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
        <!-- additional css -->
        <link rel="stylesheet" text="text/css" href="css/style.css">
        <title>Mono Page Layout</title>
        <!-- fontawesome icons -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <!-- BRAND NAME -->
                <a class="navbar-brand" href="#">Mono Page Layout</a>
                <!-- MOBILE VIEW TOGGLE -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- NAV-LINKS -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#audio">Audio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#video">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- CAROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="media/head.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="media/foot.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!-- PORTFOLIO -->
        <section id="portfolio">
            <h1 class="text-center text-capitalize">Portfolio</h1>
            <hr class="w-25 mx-auto">
            </br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                        <figure>
                            <img src="media/port1.jpg" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                        <figure>
                            <img src="media/port2.jpg" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                        <figure>
                            <img src="media/port3.jpg" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                        <figure>
                            <img src="media/port4.jpg" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                        <figure>
                            <img src="media/port5.jpg" class="img-fluid">
                        </figure>
                    </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                            <figure>
                                <img src="media/port6.jpg" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                            <figure>
                                <img src="media/port7.jpg" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                            <figure>
                                <img src="media/port8.jpg" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xxl-6">
                            <figure>
                                <img src="media/port9.jpg" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- AUDIO -->
            <section id="audio">
                <h1 class="text-center text-capitalize">Audio</h1>
                <hr class="w-25 mx-auto">
                </br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <audio controls>
                                <source src="media/1.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <audio controls>
                                <source src="media/2.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <audio controls>
                                <source src="media/3.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <audio controls>
                                <source src="media/4.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <audio controls>
                                <source src="media/5.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <audio controls>
                                <source src="media/6.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </section>
            <!-- VIDEO -->
            <section id="video">
                <h1 class="text-center text-capitalize">Video</h1>
                <hr class="w-25 mx-auto">
                </br>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/3.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/4.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/5.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/6.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/7.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/8.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12 mb-2">
                            <video controls class="video">
                                <source src="media/9.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </section>
                <!-- ABOUT -->
                <section id="about">
                    <h1 class="text-center text-capitalize">about</h1>
                    <hr class="w-25 mx-auto">
                    </br>
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xxl-6 col-xl-6">
                                <figure>
                                    <img src="media/au.jpg" class="img-fluid aboutimg">
                                </figure>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xxl-6 col-xl-6 d-flex justify-content-center align-items-start flex-column">
                                <h3>First Project</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.</p>
                                <button type="button" class="btn btn-outline-info" data-toggle="tooltip" data-placement="bottom" title="Click Me">Check More</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- CONTACT -->
                <section id="contact">
                    <div class="container-fluid bg-dark text-light text-center p-3">
                        <h1>Join Us On Social Media</h1>
                        <hr class="w-50 m-auto">
                        <div class="row mt-3">
                            <div class="col-md-2 col-sm-4 col-6 png">
                                <img src="media/fb.png">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 png">
                                <img src="media/ig.png">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 png">
                                <img src="media/twitter.png">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 png">
                                <img src="media/youtube.png">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 mt-1 png">
                                <img src="media/linkedin.png">
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 png">
                                <img src="media/google.png">
                            </div>
                        </div>
                    </div>
                </section>
            </body>
        </html>
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        </script>