<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAJU FYP Projects</title>
    <!-- <style>
        .navbar-nav li a {
            color: #D62C1F;
        }

        .dropdown-menu>li>a {
            color: blue !important;
        }

        .card-img-top {
            object-fit: cover;
            height: 400px;
        }
    </style> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="mt-4">

    <?php 
    $faculty = "Faculty of Business Administration";
    $department = "School of Business Administration";
    include 'navigation.php'; ?>

    <div class="container mt-4">

        <div class="container text-center">
            <div class="row">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">BBA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MBA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MBA</a>
                    </li>
                    
                </ul>

                <div class="col-6">
                    <div class="card">
                        <img src="foba.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">DEPARTMENT OF BUSINESS MANAGEMENT</h5>
                            <p class="card-text">Empowering future leaders with a solid foundation in business
                                principles and practices through our Faculty of Business Administration.</p>
                            <a href="#" class="btn btn-primary">FOBA Projects</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
</body>
</html>