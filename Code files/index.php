<!DOCTYPE php>
<php lang="en">

<head>
<style>
		.container {
			display: flex;
			flex-direction: row;
			align-items: center;
		}

		.image {
			margin-right: 20px;
		}

		.image img {
			max-width: 100%;
			height: auto;
		}

		.description {
			font-size: 16px;
		}
	</style>
    <title>Academysite</title>
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
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">Academy</span>Site</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>Ahemdabad Rajkot Highway, Gujarat</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>academysite@gmail.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+0281 5558888</small>
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
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="courses.php" class="nav-item nav-link">Courses</a>
                            <a href="exam_details.php" class="nav-item nav-link">Exam Details</a>
                            <a href="details.php" class="nav-item nav-link">Profile</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="transport.php" class="nav-item nav-link">Transportation</a></div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="two-login.php">Profile</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Here you can learn</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Education</h1>
                            </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Here you can learn</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Learning </h1>
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Here you can learn</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn</h1>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <h1 style="text-align:center"> Placements </h1>
    <br>
    <div class="container">
		<div class="image">
			<img src="data:image/jpeg;base64,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" alt="Image Description">
		</div>
		<div class="description">
			<h2> Raj Pandya </h2>
            <p> Raj Pandya who got very good package at MNC company</p>
            <p> Package : 9 LPA </p>
            <p> Company : RV Tech. </p>
		</div>
	</div>
    <br>
    <div class="container">
		<div class="image">
			<img src="data:image/jpeg;base64,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" alt="Image Description">
		</div>
		<div class="description">
			<h2> Sudhanshu Sharma </h2>
            <p> Sudhanshu Sharma who got very good package at MNC company due to his hard-work and efforts</p>
            <p> Package : 9.5 LPA </p>
            <p> Company : Ncircle Tech. </p>
		</div>
	</div>
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
   
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
</body>

</php>