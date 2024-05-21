<!DOCTYPE php>
<php>
<head>
  <title>Course Table Example</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">
  <style>

    body{
        font-size: 18px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 2px solid;
      font-family: Arial, sans-serif;
    }
    th, td {
        font-style: bold;
      padding: 10px;
      text-align: left;
    }
    th {
        font-size: 20px;
        background-color: #FF6600;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    input[type="text"], select {
      padding: 6px 10px;
      border: none;
      border-radius: 4px;
      background-color: #f2f2f2;
      font-size: 18px;
    }
    input[type="submit"] {
      background-color: #6c757d;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
      <!-- Topbar Start -->
      <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">Academy</span>Site</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>Ahemdabad Rajkot highway, Gujarat</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>academysite@example.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+012 345 6789</small>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
          <a  class="btn btn-primary py-2 px-2 ml-auto d-none d-lg-block" href="admin_login.php">Login Admin</a>
            
          </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">Academy</span>Site</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                          <a href="index.php" class="nav-item nav-link active">Home</a>
                          <a href="about.php" class="nav-item nav-link">About</a>
                          <a href="courses.php" class="nav-item nav-link">Courses</a>
                          <a href="exam_details.php" class="nav-item nav-link">Exam Details</a>
                          <a href="details.php" class="nav-item nav-link">Profile</a>
                          <a href="contact.php" class="nav-item nav-link">Contact</a>
                          <a href="transport.php" class="nav-item nav-link">Transportation</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="two-login.php">Profile</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


  <br><br><br>
  <h2 style="color:black">Department under B.Com Courses</h2>
  <br>
  <table>
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Code</th>
        <th>Number of Students</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "portal";
      
      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
          
          $stmt = $conn->prepare("SELECT course_name, course_code, no_of_seats FROM course WHERE department = :department");
          $department = 'B.Com';
          $stmt->bindParam(':department', $department, PDO::PARAM_STR);
      
          $stmt->execute();
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($row['course_name'], ENT_QUOTES, 'UTF-8') . "</td>";
              echo "<td>" . htmlspecialchars($row['course_code'], ENT_QUOTES, 'UTF-8') . "</td>";
              echo "<td>" . htmlspecialchars($row['no_of_seats'], ENT_QUOTES, 'UTF-8') . "</td>";
              echo "</tr>";
          }
      } catch (PDOException $e) {
          echo "Connection failed: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
      }
    ?>
  </tbody>
</table><br>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</body></php>
