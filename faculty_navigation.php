<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAJU FYP Projects</title>
    <style>
        .navbar-nav li a {
            color: #D62C1F;
        }

        .dropdown-menu>li>a {
            color: #112269 !important;
        }

        .card-img-top {
            object-fit: cover;
            height: 400px;
        }
    </style>

    <!-- <style>
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .col-2 {
                display: none;
            }

            .col-10 {
                text-align: center;
                margin-top: 10px;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .col-2 {
                display: block;
                text-align: center;
            }

            .col-10 {
                text-align: left;
                margin-top: 0;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .card-img-top {
                height: 300px;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .card-img-top {
                height: 400px;
            }
        }
    </style> -->

    <style>
        /* Select the element that contains your headings */
        .heading-container {
            text-align: center;
            /* Set the text alignment to center */
        }

        /* Select your headings */
        h1,
        h2,
        h3 {
            display: inline-block;
            /* Make the headings display as inline-blocks */
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<div class="container-fluid">
    <header>
        <div class="container text-center">
            <div class="row">

                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="index.php"> <img src="maju.png" alt="MAJU Logo">
                        </a>
                        <h6 style="color:#D62C1F ">Live, Learn and Be Inspired</h6>
                    </div>
                </div>
                <div class="heading-container col-md-8 col-sm-12 col-xs-12">
                    <h3 style="color:#112269">Mohammad Ali Jinnah University</h3>
                    <h4 style="color: #D62C1F"><?php echo $faculty; ?></h4>
                    <h5 style="color:#112269">Final Year Projects</h5>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="index.php"> <img src="oric.jpg" alt="ORIC Logo">
                        </a>
                        <h6 style="color:#D62C1F ">Live, Learn and Be Inspired</h6>
                    </div>
                </div>
            </div>
    </header>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FACULTY OF BUSINESS ADMINISTRATION
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dept_soba.php">SCHOOL OF BUSINESS ADMINISTRATION</a></li>
                        <li><a class="dropdown-item" href="dept_doms.php">DEPARTMENT OF MANAGEMENT SCIENCES</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FACULTY OF COMPUTING
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="computing.php">COMPUTER SCIENCE</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FACULTY OF ENGINEERING
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">ELECTRICAL AND COMPUTER ENGINEERING</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FACULTY OF LIFE SCIENCES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">BIOSCIENCES</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FACULTY OF SOCIAL AND BASIC SCIENCES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">ECONOMICS</a></li>
                        <li><a class="dropdown-item" href="#">PSYCHOLOGY</a></li>
                        <li><a class="dropdown-item" href="#">BASIC SCIENCES</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>