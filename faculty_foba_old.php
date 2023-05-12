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
    // $department = "School of Business Administration";
    include 'faculty_navigation.php'; ?>

    <div class="container mt-4 mb-5">

        <div class="container text-center">
            <div class="row">

                <div class="col-6">
                    <div class="card">
                        <img src="foba.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">SCHOOL OF BUSINESS ADMINISTRATION</h5>
                            <p class="card-text">Empowering future leaders with a solid foundation in business
                                principles and practices through our Faculty of Business Administration.</p>
                            <div class="row">
                                <div class="col"><a href="dept_soba_sp21.php" class="btn btn-primary">SP21 Projects</a>
                                </div>
                                <div class="col"><a href="dept_soba_sp22.php" class="btn btn-primary">SP22 Projects</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <img src="fosbs.jpg" class="card-img-top" alt="...">

                            <div class="card-body">
                                <h5 class="card-title">DEPARTMENT OF MANAGEMENT SCIENCES</h5>
                                <p class="card-text">Fostering critical thinking and promoting social responsibility
                                    through a multidisciplinary approach to education.</p>
                                <a href="dept_doms.php" class="btn btn-primary">Managment Sciences Projects</a>
                            </div>


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