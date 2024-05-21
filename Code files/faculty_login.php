<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "dbconnection.php";

    
    $required_fields = ['facultyid', 'name', 'gender', 'position', 'phone_num', 'teach_exp', 'date_dob', 'salary', 'branch', 'email_id'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            die("Error: Missing required field $field");
        }
    }

    
    $sql = "INSERT INTO faculty (facultyid, name, gender, position, phone_num, teach_exp, date_dob, salary, branch, email_id) 
            VALUES (:facultyid, :name, :gender, :position, :phone_num, :teach_exp, :date_dob, :salary, :branch, :email_id)";
    
    try {
        $stmt = $pdo->prepare($sql);

        
        $stmt->bindParam(':facultyid', $_POST['facultyid']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':gender', $_POST['gender']);
        $stmt->bindParam(':position', $_POST['position']);
        $stmt->bindParam(':phone_num', $_POST['phone_num']);
        $stmt->bindParam(':teach_exp', $_POST['teach_exp']);
        $stmt->bindParam(':date_dob', $_POST['date_dob']);
        $stmt->bindParam(':salary', $_POST['salary']);
        $stmt->bindParam(':branch', $_POST['branch']);
        $stmt->bindParam(':email_id', $_POST['email_id']);

        
        if ($stmt->execute()) {
            echo "Data Inserted :)";
            header("Location: index.php?msg=" . urlencode("Data Inserted!"));
            exit();
        } else {
            $error = $stmt->errorInfo();
            echo "Error inserting data: " . htmlspecialchars($error[2]);
        }
    } catch (PDOException $e) {
        echo "Database error: " . htmlspecialchars($e->getMessage());
    }

    unset($pdo);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-group label {
            margin-right: 10px;
        }

        .form-group input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 50%;
        }
        button[type="submit"] {
            background-color: orangered;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            display: block;
            margin: auto;
        }

    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                    <h1 class="m-0" style="color:  #FF6600;">AcademySite</h1>
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
                        <h6 class="font-weight-semi-bold mb-1">studemail Us</h6>
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
						<a href="index2.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="course_add.php" class="nav-item nav-link">Add Courses</a>
                            <a href="exam_add.php" class="nav-item nav-link">Add Exam Details</a>
                            <a href="result_add.php" class="nav-item nav-link">Add Result</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="faculty_login.php" class="nav-item nav-link">Add Faculty</a>
                            </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="two-login.php">Login</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
	<div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 style="text-align: center;">Faculty Login Form</h1>
            </div>
            <div class="card-body">
                <form method="POST">
				<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name">
				</div>
				<div class="form-group">
		<label for="gender">Gender:</label>
		<select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
				</div>
				<div class="form-group">
		<th><label for="position">Position:</label></th>
				<td>
					<select id="position" name="position">
						<option value="Professor">Professor</option>
						<option value="Associate Professor">Associate Professor</option>
						<option value="Assistant Professor">Assistant Professor</option>
						<option value="Lecturer">Lecturer</option>
					</select>
				</td>
				</div>
				<div class="form-group">
		<label for="phone_num">Phone Number:</label>
		<input type="text" id="phone_num" name="phone_num">
				</div>
				<div class="form-group">
		<label for="teach_exp">Teaching Experience:</label>
		<input type="text" id="teach_exp" name="teach_exp">
				</div>
				<div class="form-group">
		<label for="date_dob">Date of Birth:</label>
		 <input type="date" id="date_dob" name="date_dob">
				</div>
				<div class="form-group">
		<label for="salary">Salary:</label>
		<input type="text" id="salary" name="salary">
				</div>
				<div class="form-group">
		<label for="branch">Branch:</label>
		<input type="text" id="branch" name="branch">
				</div>
				<div class="form-group">
		<label for="email_id">Email ID:</label>
		<input type="email" id="email_id" name="email_id">
				</div>
				<button type="submit" name="submit" class="my-button">Submit</button>
	</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
