<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile Page </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="stylesheet" href="css/my.css">
    <style>
      body{
        background-color: #ddd;
      }
		nav {
			/*background-color:cornflowerblue;*/
			overflow: hidden;
      font-size: 20px;
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
		<a href="exam_details.php">Upcoming</a>
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
                // $stmt = $conn->prepare("SELECT examSubject,classNumber,blockNo,date_exam,examType,studname,grno FROM examdetails e join student s");
                // $stmt->execute();
                $sql = "SELECT examSubject,classNumber,blockNo,date_exam,examType,studname,grno FROM examdetails e inner join student s 
                where s.grno = 121113";
                    $result = $pdo->query($sql);
                    if ($result->rowCount() > 0) {
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                        $examSubject = $row['examSubject'];
                        $classNumber = $row['classNumber'];
                        $blockNo = $row['blockNo'];
                        $date_exam = $row['date_exam'];
                        $examType = $row['examType'];
                        $studname = $row['studname'];
                        $grno = $row['grno'];
                    } else {
                        echo "0 results";
                    }
                    
             ?>
             <?php
            echo "<h3>".$row['studname']."</h3>"?>
          </div>
          <div class="card-body">
            <?php echo "<p ><strong >Student ID:</strong>".$row['grno']."</p>"?>
           
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Examination Details</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Academic Year	</th>
                <td width="2%">:</td>
                <td>2023</td>
              </tr>
              <tr>
                <th width="30%">Subject</th>
                <td width="2%">:</td>
                <?php echo "<td>".$row['examSubject']."</td>"?>
              </tr>
              
              <tr type="date">
                <th width="30%">Date of Examination</th>
                <td width="2%">:</td>
                <td><?php echo $row['date_exam']; ?></td>
              </tr>
              <tr>
                <th width="30%">Class-Number</th>
                <td width="2%">:</td>
                <td><?php echo $row['classNumber']; ?></td>
              </tr>
              <tr>
                <th width="30%">Block-No</th>
                <td width="2%">:</td>
                <td><?php echo $row['blockNo']; ?></td>
              </tr>
            <hr width="50%">
            </table>
          
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
   		</div>
		</div>
    </div>
</section>
 	</body>
</html>