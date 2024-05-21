<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile Page</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
   
    
	    <link rel="stylesheet" href="css/my.css">
</head>
<body>
<style>
    body{
        background-color: #ddd;
      }
		nav {
			font-size: 20px;
			overflow: hidden;
		}
		nav a {
			float: left;
			display: block;
			color: black;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		nav a:hover {
			background-color: #ddd;
			color:black;
		}
	</style>
</head>
<body>
  
<header class="ScriptHeader">
    <nav>
    <a href="index.php">Home</a>
                          <a href="about.php">About</a>
                          <a href="courses.php">Courses</a>
                          <a href="exam_details.php">Exam Details</a>
                          <a href="details.php">Profile</a>
                          <a href="contact.php">Contact</a>
                          <a href="transport.php">Transportation</a>
                        
                        <b><a  style="color:#FF6600" href="two-login.php">Profile</a></b>
	</nav>
</header>
<hr>
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            
            
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1 align="center"> WELCOME  STUDENT !!</h1>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portal";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["un"])) {
        $username = trim($_POST["un"]); 

        $stmt = $conn->prepare("SELECT studname, studemail FROM student WHERE studemail = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<br>';
                echo "<h3>" . htmlspecialchars($row["studname"]) . "</h3><br>"; // Use htmlspecialchars to prevent XSS
                echo "Email: " . htmlspecialchars($row["studemail"]) . "<br>";
            }
        } else {
            echo "No student data found for username: " . htmlspecialchars($username); // Use htmlspecialchars to prevent XSS
        }

        $stmt->close();
    }

    $conn->close();

?>           
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              
              <?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portal";

$conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

if (isset($_POST["un"])) 
  // Get the value of the "username" field
  $username = $_POST["un"];
// Prepare a SQL query to retrieve the student data
$stmt = $conn->prepare("SELECT * FROM student WHERE studemail = ?");
$stmt->bind_param("s", $username);
$stmt->execute();


// Get the results of the SQL query
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo '<tr><th width="30%">Enrollment no</th>
  <td width="2%">:</td>
  <td>'. $row["grno"] .'</td> 
  </tr>';
  echo '<tr><th width="30%">Gender</th>
  <td width="2%">:</td>
  <td>'. $row["studgen"] .'</td> 
  </tr>';
  echo '<tr><th width="30%">Institute Email</th>
  <td width="2%">:</td>
  <td>'. $row["studemail"] .'</td> 
  </tr>';
  echo '<tr><th width="30%">Date of Birth</th>
  <td width="2%">:</td>
  <td>'. $row["studbdate"] .'</td> 
  </tr>';
  echo '<tr><th width="30%">Phone no</th>
  <td width="2%">:</td>
  <td>'. $row["studphno"] .'</td> 
  </tr>';
  echo '<tr><th width="30%">Course</th>
  <td width="2%">:</td>
  <td>'. $row["studcourse"] .'</td> 
  </tr>';
  
  echo '<tr><th width="30%">Academic year</th>
  <td width="2%">:</td>
  <td>'. $row["academic"] .'</td> 
  </tr>';
} else {
  echo "0 results";
}
?>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>