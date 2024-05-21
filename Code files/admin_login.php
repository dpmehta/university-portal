<?php
try {
    $pdo = new PDO("mysql:host=localhost; dbname=portal", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


if (isset($_POST['login'])) {
    $sql = "SELECT * FROM admin WHERE username = :u_uname AND password = :u_pwd";
    $res = $pdo->prepare($sql);
    $res->bindParam(':u_uname', $_POST['un']);
    $res->bindParam(':u_pwd', $_POST['ps']);
    $res->execute();
    
    if ($res->rowCount() == 1) {
        header("Location: index2.php");
        exit;
    } else {
        echo '<script>alert("Username and Password are Invalid");</script>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['studname'])) {
    require_once "dbconnection.php";

    $requiredFields = ['studname', 'studphno', 'studgen', 'studbdate', 'studcourse', 'studemail', 'grno', 'password'];
    $allFieldsFilled = true;

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $allFieldsFilled = false;
            break;
        }
    }

    if (!$allFieldsFilled) {
        echo "Please fill in all required fields";
    } else {
        try {
            $pdo->beginTransaction();

            
            $sql = "INSERT INTO student (studname, studphno, studgen, studbdate, studcourse, studemail, grno) 
                    VALUES (:studname, :studphno, :studgen, :studbdate, :studcourse, :studemail, :grno)";
            $res = $pdo->prepare($sql);
            $res->bindParam(':studname', $_POST['studname']);
            $res->bindParam(':studphno', $_POST['studphno']);
            $res->bindParam(':studgen', $_POST['studgen']);
            $res->bindParam(':studbdate', $_POST['studbdate']);
            $res->bindParam(':studcourse', $_POST['studcourse']);
            $res->bindParam(':grno', $_POST['grno']);
            $res->bindParam(':studemail', $_POST['studemail']);
            $res->execute();

           
            $rev = "INSERT INTO login (studemail, password) VALUES (:studemail, :password)";
            $res1 = $pdo->prepare($rev);
            $res1->bindParam(':studemail', $_POST['studemail']);
            $res1->bindParam(':password', $_POST['password']);
            $res1->execute();

            $pdo->commit();
            echo "Data Inserted :)";
            header("Location: index.php?msg=Data Inserted!");
            exit;
        } catch (PDOException $e) {
            $pdo->rollBack();
            echo "Error inserting data: " . $e->getMessage();
        }
    }
}

unset($pdo);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="two-login.css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body>
    <br><br><br><br><br><br><br><br><br>
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
                        <small>+281 345 6789</small>
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
        
    <h2>Student Register</h2>
<div class="container" id="container">
<div class="form-container sign-up-container" style="position: relative ;">
<form method="POST" name="myForm" onsubmit="return validateForm()">
    <input type="text" placeholder="Name" name="studname" required /><br>
    <input type="number" placeholder="Phone Number" name="studphno" required /><br>
    <input type="text" placeholder="Gender" name="studgen" required /><br>
    <input type="date" placeholder="Date Of Birth" name="studbdate" required /><br>
    <input type="text" placeholder="Course Name" name="studcourse" required /><br>
    <input type="number" placeholder="GR number" name="grno" required /><br>
    <input type="email" placeholder="Email" name="studemail" required /><br>
    <input type="password" placeholder="Password" name="password" required /><br>
    <button type="submit">Sign Up</button>
</form>

       
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Sign in</h1>
			<input type="username" placeholder="Email" name="un"/><br>
			<input type="password" placeholder="Password" name="ps"/><br>
			<a href="#">Forgot your password?</a>
			<input type="submit" name="login" value="Sign In"/><br>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
        <div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Admin!</h1>
				<p>Enter student's personal details </p>
                <button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script>
    function validateForm() {
        var phone = document.forms["myForm"]["studphno"].value;
        var email = document.forms["myForm"]["studemail"].value;
        var password = document.forms["myForm"]["password"].value;

       
        // Validate phone number
        var phonePattern = /^\d{10}$/;
        if (!phonePattern.test(phone)) {
            alert("Phone number must be 10 digits");
            return false;
        }

        // Validate email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Invalid email format");
            return false;
        }

        // Validate password
        if (password.length < 5) {
            alert("Password must be at least 5 characters long");
            return false;
        }

        // All fields are valid
        return true;
    }
    const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>
