<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Reece's Hub</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/functions.php");
?>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #333333;">
        <div class="container"><a class="navbar-brand" href="#" style="color: #dde4eb;font-size: 26px;">Reece's Hub</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white-50" href="#">Projects</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white-50" href="#">About</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <header class="d-flex masthead" style="background-image: url(&quot;assets/img/homescreen-background.png&quot;);background-size: cover;background-repeat: no-repeat;">
        <div class="container my-auto text-center">
            <h1 class="mb-1" style="color: rgb(221,228,235);">Reece Trolley</h1>
            <h3 class="mb-5"><em style="color: #dde4eb;">Aspiring Programmer</em></h3><a class="btn btn-xl js-scroll-trigger" role="button" data-bs-hover-animate="pulse" href="#section1" style="background-color: #c35196;color: #dde4eb;">Show me more</a>
            <div class="overlay"></div>
        </div>
    </header>
    <section id="section1" class="content-section bg-dark text-light" style="height: 500px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>Hi! Welcome to my portfolio!</h2>
                    <p class="lead mb-5">My name's Reece, a computer science student who likes to code things, I made this site to show off any projects I undertake, take a look around!</p><a class="btn btn-xl js-scroll-trigger" role="button" href="#section2" style="background-color: #c35196;color: #dde4eb;">What Kind of Projects?</a></div>
            </div>
        </div>
    </section>
    <section id="section2" class="content-section text-light" style="color: #dde4eb;background-color: #c35196;">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Portfolio</h3>
                <h2 class="mb-5">Recent Projects</h2>
            </div>
            <div class="row no-gutters">
                <?php
                output_projects('created_at', 4, 'box');

                ?>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">&nbsp;<a class="text-white social-link rounded-circle" href="#" style="background-color: #c35196;"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item">&nbsp;<a class="text-white social-link rounded-circle" href="#" style="background-color: #c35196;"><i class="icon-social-github"></i></a></li>
            </ul>
        </div><a class="js-scroll-trigger scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a></footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
