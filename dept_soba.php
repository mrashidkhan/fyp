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

  <!-- CSS for tabbed interface -->
  <style>
    .tabs {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .tabs li {
      display: inline-block;
      margin-right: 10px;
    }

    .tabs li a {
      display: block;
      padding: 10px;
      background-color: #112269;
      color: #fff;
      text-decoration: none;
    }

    .tabs li a.active {
      background-color: #D62C1F;
      color: #fff;
    }

    .tab-content {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .tab-content.active {
      display: block;
    }
  </style>

  <!-- CSS for displaying a project -->
  <style>
    .project {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }

    .project h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .project p {
      margin: 0 0 10px 0;
    }

    .project img {
      max-width: 100%;
    }

    * Active tab style */ .tabs.active {
      border-color: #D62C1F;
      color: #112269;
    }

    /* Inactive tab style */
    .tabs:not(.active) {
      border-color: #112269;
      color: #D62C1F;
    }
  </style>

  <style>
    tab-content {
      width: 100%;
    }

    @media only screen and (min-width: 576px) {
      .tab-content {
        width: auto;
      }
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="mt-4">

  <?php 
    $faculty = "Faculty of Business Administration";
    $department = "School of Business Administration";
    $term = "SP21";
    include 'navigation.php'; ?>

  <div class="container mt-4">

    <div class="container text-center">
      <div class="row">

        <form method="post">
          <label for="semester">Select Semester:</label>
          <select id="semester" name="semester">
            <option value="SP21"
              <?php if(isset($_POST['semester']) && $_POST['semester'] == 'SP21') echo 'selected'; ?>>SP21</option>
            <option value="SP22"
              <?php if(isset($_POST['semester']) && $_POST['semester'] == 'SP22') echo 'selected'; ?>>SP22</option>

          </select>
          <input type="submit" value="Go">
        </form>


        <br> <br>
        <?php $semester = isset($_POST['semester']) ? $_POST['semester'] : 'SP21'; ?>

        <div class="col-12">
          <!-- HTML for tabbed interface -->
          <div class="tabbed-interface">
            <ul class="tabs">
              <li><a href="#program1" class="active">BBA</a></li>
              <li><a href="#program2">MBA</a></li>
              <li><a href="#program3">MBA 3.5</a></li>
            </ul>
            <div class="tab-content active" id="program1">
              <!-- Display projects for Program 1 -->
              <?php include "program_bba_$semester.php"; ?>
            </div>
            <div class="tab-content" id="program2">
              <!-- Display projects for Program 2 -->
              <?php include "program_mba_$semester.php"; ?>
            </div>
            <div class="tab-content" id="program3">
              <!-- Display projects for Program 3 -->
              
              <?php include "program_mba35_$semester.php"; ?>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- HTML for displaying a project -->


  <!-- JavaScript for tabbed interface -->
  <script>
    // Get all tabs and tab contents
    const tabs = document.querySelectorAll('.tabs li a');
    const tabContent = document.querySelectorAll('.tab-content');

    // Add event listener to each tab
    tabs.forEach(tab => {
      tab.addEventListener('click', e => {
        e.preventDefault(); // Prevent default link behavior
        tabs.forEach(tab => tab.classList.remove('active')); // Remove active class from all tabs
        tab.classList.add('active'); // Add active class to clicked tab
        const target = document.querySelector(tab.getAttribute('href')); // Get target tab content
        tabContent.forEach(content => content.classList.remove(
          'active')); // Remove active class from all tab contents
        target.classList.add('active'); // Add active class to target tab content
      });
    });
  </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
</body>
</html>