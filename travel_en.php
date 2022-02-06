<?php 

require_once 'admin/core/init.php';

if(isset($_GET['page']))
{
    $page = $_GET['page'];

}
else
{
    $page = 1;
}



$num_per_page = 6;
$start_from = ($page-1)*$num_per_page;

$travelNews = $user->getTravelNewsPaginationEn($start_from, $num_per_page);

$travelNewsAry = array();

foreach ($travelNews as $key => $value) {
    $place =array(
        "id" => trim($value['id']," "),
        "title" => trim($value['title']," "),
        "body" => trim($value['body']," "),
        "image" => trim($value['image']," "),
        "category" => trim($value['category']," "),
        "content_writer" => trim($value['content_writer']," "),
        "date" => trim($value['date']," ")
    );
    
    $travelNewsAry[] = $place;
}
$finalAry =  json_encode($travelNewsAry);

// get recent news post

$recentNews = $user->getRecentEnNews();

$recentNewsAry = array();

foreach ($recentNews as $key => $value) {
    $place =array(
        "id" => trim($value['id']," "),
        "title" => trim($value['title']," "),
        "body" => trim($value['body']," "),
        "image" => trim($value['image']," "),
        "category" => trim($value['category']," "),
        "content_writer" => trim($value['content_writer']," "),
        "date" => trim($value['date']," ")
    );
    
    $recentNewsAry[] = $place;
}
$finalAry =  json_encode($recentNewsAry);


// $query = "select * from pagination limit $start_from,$num_per_page";
// $result = mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>HtooMedia - News & Magazine</title>

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
						<a class="nav-link dropdown-toggle active" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
							<ul class='dropdown-menu' aria-labelledby='pagesMenu'>
								<li><a class='dropdown-item' href="livingStyle_en.php"> Living Style </a></li>
								<li><a class='dropdown-item' href="sports_en.php"> Sports </a></li>
								<li><a class='dropdown-item' href="country_en.php"> Country </a></li>
								<li><a class='dropdown-item active' href="travel_en.php">  Travel </a></li>
								
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

<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-300 text-center" style="background-image:url('img/travelcover.jpg'); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
							<div class="text-white mb-3">Browsing category:</div>
              <h1 class="text-white h2">
								<span class="badge bg-warning mb-2">
									<i class="fas fa-circle me-2 small fw-bold"></i> Travel </span>
							</h1>
              <div class="text-center position-relative">
              	<?php 			   	 		
              			$newsCount = $user->getTravelNewsCountEn();	
			   	 		$newsCountInt = (int)$newsCount[0]['c']; ?>
								<span class="badge bg-info fs-6"><?php echo $newsCountInt; ?>  posts</span>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
 Highlights START -->
<section class="position-relative">
	<div class="container" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->			
			<div class="col-lg-9">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's highlights</h2>	
					<p>Latest breaking news, pictures, videos, and special reports</p>
				</div>
				
            <div class="row filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
               <!-- Card item START -->	
               <?php foreach ($travelNewsAry as $singleTitle):  
               			// print_r($singleTitle);
               	?>	

               <div class="col-sm-6 col-lg-4 grid-item">
                  <div class="card mb-4">
                    	<!-- Card img -->
                     <div class="card-fold position-relative">
                         <?php 
                         	if ($singleTitle["image"] == "") {                         		
                         		echo "<img class='card-img' src='img/default-img.png' alt='Card image'>" ;
                         	}else{
                         		 echo "<img class='card-img' src='img/".$singleTitle['image']."' alt='Card image'>"; 
                         	}
                        ?>
                     </div>
                     <div class="card-body px-0 pt-3">
                        <h4 class="card-title">
                        	<?php 
                        		echo "<a href='post-single.php?post=".$singleTitle['id']."' class='btn-link text-reset stretched-link fw-bold'>".
                        		 $singleTitle['title'] ."</a>";
                        	 ?>
                        	
                        </h4>

		            		<p class="card-text"><?php 
		            			if(strlen($singleTitle['body']) > 100 ){
		            				 echo substr($singleTitle['body'],0,100)." <span class='btn-link'>See More... </span>";
		            			}
		            		   ?>
		            		   
		            		   </p>
		               	<!-- Card info -->
		               	<ul class="nav nav-divider align-items-center text-uppercase small">
		                 	 <li class="nav-item">
		                   		<a href="#" class="nav-link text-reset btn-link"><?php echo $singleTitle["content_writer"]  ?></a>
		                  	</li>
		                  	<li class="nav-item"><?php echo $singleTitle["date"]  ?></li>
		               	</ul>
		            	</div>
		          	</div>
		         </div>
		         <?php endforeach; ?>
               <!-- Card item END -->
              
					<!-- Load More END -->
            </div> <!-- Row end -->
 				<!-- Load More START -->
			<nav class="mt-5" aria-label="navigation">
			   	 <ul class="pagination d-flex justify-content-between">
			   	 	<?php 
			   	 		$newsCount = $user->getTravelNewsCountEn();	
			   	 		$newsCountInt = (int)$newsCount[0]['c'];

			   	 		$total_page = ceil($newsCountInt/$num_per_page);

				   	 	if($page > 1)
	                {	    	                     	          
	                    
				        		echo "<li class='page-item flex-fill text-center'> <a href='travel_en.php?page=".($page-1)."' class='page-link'> <i class='fas fa-long-arrow-alt-left me-2 rtl-flip'></i> Previous</a>	</li>"; 
				        			 				        				
	                }
	            		elseif($page < $total_page) {                	
			        			echo "<li class='page-item flex-fill text-center'> <a href='travel_en.php?page=".($page+1)."' class='page-link'>	Next <i class='fas fa-long-arrow-alt-right ms-2 rtl-flip'>
			        			</i></a></li>"; 
			        	}
			      ?>			   	 

			    </ul>
		  </nav>
			</div>
			<!-- Main Post END -->
			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky data-margin-top="80" data-sticky-for="767">					

					<div class="row">
						<!-- Recent post widget START -->
						<div class="col-12 col-sm-6 col-lg-12">
							<h4 class="mt-4 mb-3">Recent post</h4>

							<?php foreach ($recentNewsAry as $singleRecentNews): ?>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="row g-3">
									<div class="col-4">
										                         <?php 
                         	if ($singleTitle["image"] == "") {                         		
                         		echo "<img class='card-img' src='img/default-img.png' alt='Card image'>" ;
                         	}else{
                         		 echo "<img class='card-img' src='img/".$singleTitle['image']."' alt='Card image'>"; 
                         	}
                        ?>
									</div>
									<div class="col-8">
										<h6>
											<?php 
                        		echo "<a href='post-single-en.php?post=".$singleRecentNews['id']."' class='btn-link stretched-link text-reset fw-bold'>".
                        		substr( $singleRecentNews['title'], 0, 80 ) ."</a>";
                        	 ?>
												
											</a></h6>
										<div class="small mt-1"><?php echo $singleRecentNews["date"]  ?></div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!-- Recent post widget END -->
					</div>
				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
 Highlights END -->



</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container" id="contact_us">
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
				    <input type="email" class="form-control" placeholder="Enter your email">
				  </div>
				  <div class="col-12">
				    <button type="submit" class="btn btn-primary m-0">Send</button>
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
		<div class="container">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-6">
					<!-- Copyright -->
					<div class="text-center text-md-start text-primary-hover text-muted">©2021 &nbsp; &nbsp; Developed by <a href="index.php" class="text-decoration-underline text-reset">HtooMedia</a> . &nbsp; &nbsp; All rights reserved. 
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

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>