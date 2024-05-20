<!DOCTYPE php>
<php lang="en">
<head>
    
    <title>Student Result Page</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="stylesheet" href="css/my.css">
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
		<a href="#">Upcoming</a>
		<a href="result_details.php">Results</a>
		
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

              $pdo = new PDO("mysql:host=localhost; dbname=portal","root","");
              $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              if (isset($_POST["un"])) {
                // Get the value of the "username" field
                $username = $_POST["un"];}

              $sql = "SELECT r.grno, r.spi, r.remarks, r.sem,r.backlog, s.studname, s.studemail,s.academic
              FROM result r
              INNER JOIN student s
              ON r.grno = s.grno 
              where r.grno = 121113
              ";
                  $result = $pdo->query($sql);
                  if ($result->rowCount() > 0) {
                      $row = $result->fetch(PDO::FETCH_ASSOC);
                      $studname = $row['studname'];
                      $grno = $row['grno'];
                      $studemail = $row['studemail'];
                      $spi=$row['spi'];
                      $remarks=$row['remarks'];
                      $semester=$row['sem'];
                      $backlog=$row['backlog'];
                      $academic=$row['academic'];
                      
                  } else {
                      echo "0 results";
                  }
              ?>
            <h3><?php echo $studname; ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $grno; ?></p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Result Details</h3>
          </div>
          <div class="card-body pt-0">
            <h3 style="text-align: center;">Semester <?php echo $semester; ?></h3>
            <table class="table table-bordered">
              <tr>
                <th width="30%">Roll</th>
                <td width="2%">:</td>
                <td><?php echo $grno; ?></td>
              </tr>
              <tr>
                <th width="30%">Academic Year</th>
                <td width="2%">:</td>
                <td><?php echo $academic; ?></td>
              </tr>
              <tr>
                <th width="30%">SPI</th>
                <td width="2%">:</td>
                <td><?php echo $spi; ?></td>
              </tr>
              <tr>
                <th width="30%">Remarks</th>
                <td width="2%">:</td>
                <td><?php echo $remarks; ?></td>
              </tr>
              <tr>
                <th width="30%">Back-Log</th>
                <td width="2%">:</td>
                <td><?php echo $backlog; ?></td>
              </tr>
            </table>
            </div>
        </div>
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