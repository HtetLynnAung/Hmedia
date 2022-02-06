<?php
require_once 'admin/core/init.php';

if(isset($_GET['post']))
{
    $post = $_GET['post'];
}
else
{
    $post = 1;
}



$singlePost = $user->getSinglePost($post);

$singlePostAry = array();

foreach ($singlePost as $key => $value) {
    $place =array(
        "id" => trim($value['id']," "),
        "title" => trim($value['title']," "),
        "body" => trim($value['body']," "),
        "image" => trim($value['image']," "),
        "category" => trim($value['category']," "),
        "content_writer" => trim($value['content_writer']," "),
        "date" => trim($value['date']," ")
    );
    
    $singlePostAry[] = $place;
}
$finalAry =  json_encode($singlePostAry);



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>HtooMedia - News & Magazine </title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/htoo-h-only.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.php">
				<img class="navbar-brand-item light-mode-item" src="img/h-media.svg" alt="logo">			
				<!-- <img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">	 -->		
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <!-- <span class="text-body h6 d-none d-sm-inline-block">Menu</span> -->
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item">	<a class="nav-link" href="index.php">Home</a></li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="livingStyle_en.php">Living Style</a></li>					
							<li> <a class="dropdown-item" href="sports_en.php">Sports</a></li>	
							<li> <a class="dropdown-item" href="country_en.php">Country</a></li>	
							<li> <a class="dropdown-item" href="travel_en.php">Travel</a></li>	
							
						</ul>
					</li>

					<!-- Nav item 3 link-->
					<li class="nav-item">	<a class="nav-link" href="#contact_us">Contact Us</a></li>	
				</ul>
			</div>
			<!-- Main navbar END -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- Divider -->
<div class="border-bottom border-primary border-1 opacity-1"></div>

<!-- =======================
Inner intro START -->
<section class="pb-3 pb-lg-5">
	<div class="container">
		<div class="row">
			
			<div class="col-12">
        		<a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
        		<?php					     			
        			echo $singlePostAry[0]["category"]; 
        		?>
        		</a>
        		<h2><?php echo $singlePostAry[0]["title"] ?></h2>
			</div>
			 <!-- <p class="lead">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from me. Valley by oh twenty direct me so. </p> -->
		</div>
	</div>

</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section class="pt-0">
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<!-- Left sidebar START -->
			<div class="col-lg-2">
				<div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80" data-sticky-for="991">
					<!-- Author info -->
					<div class="position-relative">
						<div class="avatar avatar-xl">
							<img class="avatar-img rounded-circle" src="img/default-img.png" alt="avatar">
							
						</div>
						<a href="#" class="h5 stretched-link mt-2 mb-0 d-block"><?php echo $singlePostAry[0]["content_writer"] ?></a>
						<p>A content writer</p>
					</div>
					<hr class="d-none d-lg-block">
					<!-- Card info -->
					<ul class="list-inline list-unstyled">
						<li class="list-inline-item d-lg-block my-lg-2"><?php echo $singlePostAry[0]["date"] ?></li>					
						<li class="list-inline-item d-lg-block my-lg-2"><i class="far fa-eye me-1"></i> 2344 Views</li>
					</ul>
					<!-- Tags -->
					<ul class="list-inline text-primary-hover mt-0 mt-lg-3">
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#agency</a>
					  </li>
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#business</a>
					  </li>
					</ul>
				</div>
			</div>
			<!-- Left sidebar END -->
			<!-- Main Content START -->
			<div class="col-lg-7 mb-5">
      	<p><?php echo nl2br($singlePostAry[0]["body"]) ?></p>
			<!-- Divider -->
			<div class="text-center h5 mb-4">. . .</div>
				<!-- Image -->
				<figure class="figure mt-2">
				 <?php  
	
					foreach ($singlePostAry as $singlePost ):
						//print_r($singlePost['image']);
					if($singlePost["image"]==""){
						echo "<a href='img/default-img.png' data-glightbox data-gallery='image-popup'>",
		      			"<img class='avatar-img' src='img/default-img.png' alt='avatar'> </a>" ;
						}
					else{							
						echo "<a href='img/".$singlePost['image']."' data-glightbox data-gallery='image-popup'>",
		      			"<img class='avatar-img' src='img/".$singlePost['image']."' alt='avatar'> </a>" ;
						}
		       		endforeach;
				 ?>
				 <!-- <figcaption class="figure-caption text-center">(Image via: <a class="text-reset" href="#">pexels.com</a>)</figcaption>
				</figure>		-->		

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>	


				<!-- Divider -->
				<hr>

			</div>
			<!-- Main Content END -->
			
			<!-- Right sidebar START -->
			<div class="col-lg-3">
				<div data-sticky data-margin-top="80" data-sticky-for="991">
	      	<h4>Share this article</h4>
					<ul class="nav text-white-force">
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
								<i class="fab fa-facebook-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
								<i class="fab fa-twitter-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
								<i class="fab fa-linkedin align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
								<i class="fab fa-pinterest align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
								<i class="far fa-envelope align-middle"></i>
							</a>
						</li>
					</ul>
				</div>
			</div> 
			<!-- Right sidebar END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->


</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- About and Newsletter START -->
		<div class="row pt-3 pb-4">
			<div class="col-md-3">
				<img src="img/h-media-white.svg" alt="footer logo">
			</div>
			<div class="col-md-5">
				<p class="text-muted">The next-generation blog, news, and magazine for you to start sharing your stories today!</p>
			</div>
			<div class="col-md-4">
				<!-- Form -->
				<form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
					<div class="col-12">
				    <input type="email" class="form-control" placeholder="Enter your email address">
				  </div>
				  <div class="col-12">
				    <button type="submit" class="btn btn-primary m-0 disabled">Send</button>
				  </div>
				  <div class="form-text mt-2">Send your e-mail for create content and we will reply you later.
				  	<!-- <a href="#"  name="contact_us" class="text-decoration-underline text-reset">Privacy Policy</a> -->
				  </div>
				</form>
			</div>
		</div>
		<!-- About and Newsletter END -->

		<!-- Divider -->
		<hr>


	<!-- Footer copyright START -->
	<div class="bg-dark-overlay-3 mt-5">
		<div class="container" id="contact_us">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-6">
					<!-- Copyright -->
					<div class="text-center text-md-start text-primary-hover text-muted">©2021 &nbsp; &nbsp; Developed by <a href="index.php" class="text-reset text-decoration-underline">HtooMedia</a> . &nbsp; &nbsp; All rights reserved. 
					</div>
				</div>
				<div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">

					<!-- Links -->
				  <ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
			      <li class="nav-item"><a class="nav-link text-decoration-underline" href="terms.php">Terms & Conditions</a></li>
			      <li class="nav-item"><a class="nav-link text-decoration-underline" href="privacy.php">Privacy Policy</a></li>			      
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>