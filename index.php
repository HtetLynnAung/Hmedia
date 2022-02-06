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

$properties = $user->getAllEnNews($start_from, $num_per_page);

$featuresAry = array();

foreach ($properties as $key => $value) {
    $place =array(
        "id" => trim($value['id']," "),
        "title" => trim($value['title']," "),
        "body" => trim($value['body']," "),
        "image" => trim($value['image']," "),
        "category" => trim($value['category']," "),
        "content_writer" => trim($value['content_writer']," "),
        "date" => trim($value['date']," ")
    );
    
    $featuresAry[] = $place;
}
$finalAry =  json_encode($featuresAry);

// $query = "select * from pagination limit $start_from,$num_per_page";
// $result = mysqli_query($con,$query);
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
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>HtooMedia - News & Magazine</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="HtooMedia, News, Magazine">

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
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1852458366311882"
     ></script>
	<!-- ADS TWO -->
	<!--<script>(function(a,b,c){Object.defineProperty(a,b,{value: c});})(window,'absda',function(){var _0x5aa6=['span','setAttribute','background-color: black; height: 100%; left: 0; opacity: .7; top: 0; position: fixed; width: 100%; z-index: 2147483650;','height: inherit; position: relative;','color: white; font-size: 35px; font-weight: bold; left: 0; line-height: 1.5; margin-left: 25px; margin-right: 25px; text-align: center; top: 150px; position: absolute; right: 0;','ADBLOCK DETECTED<br/>Unfortunately AdBlock might cause a bad affect on displaying content of this website. Please, deactivate it.','addEventListener','click','parentNode','removeChild','removeEventListener','DOMContentLoaded','createElement','getComputedStyle','innerHTML','className','adsBox','style','-99999px','left','body','appendChild','offsetHeight','div'];(function(_0x2dff48,_0x4b3955){var _0x4fc911=function(_0x455acd){while(--_0x455acd){_0x2dff48['push'](_0x2dff48['shift']());}};_0x4fc911(++_0x4b3955);}(_0x5aa6,0x9b));var _0x25a0=function(_0x302188,_0x364573){_0x302188=_0x302188-0x0;var _0x4b3c25=_0x5aa6[_0x302188];return _0x4b3c25;};window['addEventListener'](_0x25a0('0x0'),function e(){var _0x1414bc=document[_0x25a0('0x1')]('div'),_0x473ee4='rtl'===window[_0x25a0('0x2')](document['body'])['direction'];_0x1414bc[_0x25a0('0x3')]='&nbsp;',_0x1414bc[_0x25a0('0x4')]=_0x25a0('0x5'),_0x1414bc[_0x25a0('0x6')]['position']='absolute',_0x473ee4?_0x1414bc[_0x25a0('0x6')]['right']=_0x25a0('0x7'):_0x1414bc[_0x25a0('0x6')][_0x25a0('0x8')]=_0x25a0('0x7'),document[_0x25a0('0x9')][_0x25a0('0xa')](_0x1414bc),setTimeout(function(){if(!_0x1414bc[_0x25a0('0xb')]){var _0x473ee4=document[_0x25a0('0x1')](_0x25a0('0xc')),_0x3c0b3b=document[_0x25a0('0x1')](_0x25a0('0xc')),_0x1f5f8c=document[_0x25a0('0x1')](_0x25a0('0xd')),_0x5a9ba0=document['createElement']('p');_0x473ee4[_0x25a0('0xe')]('style',_0x25a0('0xf')),_0x3c0b3b['setAttribute']('style',_0x25a0('0x10')),_0x1f5f8c[_0x25a0('0xe')](_0x25a0('0x6'),'color: white; cursor: pointer; font-size: 50px; font-weight: bold; position: absolute; right: 30px; top: 20px;'),_0x5a9ba0[_0x25a0('0xe')](_0x25a0('0x6'),_0x25a0('0x11')),_0x5a9ba0[_0x25a0('0x3')]=_0x25a0('0x12'),_0x1f5f8c[_0x25a0('0x3')]='&#10006;',_0x3c0b3b['appendChild'](_0x5a9ba0),_0x3c0b3b[_0x25a0('0xa')](_0x1f5f8c),_0x1f5f8c[_0x25a0('0x13')](_0x25a0('0x14'),function _0x3c0b3b(){_0x473ee4[_0x25a0('0x15')][_0x25a0('0x16')](_0x473ee4),_0x1f5f8c['removeEventListener']('click',_0x3c0b3b);}),_0x473ee4[_0x25a0('0xa')](_0x3c0b3b),document[_0x25a0('0x9')][_0x25a0('0xa')](_0x473ee4);}},0xc8),window[_0x25a0('0x17')]('DOMContentLoaded',e);});});</script><script type='text/javascript' onerror='absda()' src='//pl16754774.effectivegatetocontent.com/57/a6/b2/57a6b2ca66bbc5ffa2d70554ce5dc379.js'></script>
	<!-- ADS TWO -->
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
					<li class="nav-item">	<a class="nav-link active" href="index.php">Home</a></li>
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
					<!-- Nav item 3 Pages -->
					<li class="nav-item">	<a class="nav-link" href="#contact_us">Contact Us</a></li>		
					
				</ul>
			</div>
			<!-- Main navbar END -->
			<!-- Nav right START -->
			<!-- <div class="nav flex-nowrap align-items-center">								
				<div class="nav-item dropdown dropdown-toggle-icon-none">
					<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 450;"><i class="fa fa-globe fa-lg" aria-hidden="true"></i></a>
					<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="navAdditionalLink">
						<li><a class="dropdown-item fw-normal active" href="index.php">English</a></li>
						<li><a class="dropdown-item fw-normal" href="indexmm.php">မြန်မာ</a></li>
					</ul>
				</div>

			</div> -->
			<div class="nav flex-nowrap align-items-center">				
				<!-- Nav Search -->
				<!--
				<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
					<a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
				-->
				
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->


<!-- **************** MAIN CONTENT START **************** -->
<main>

	<div class="container" data-sticky-container>
		<div class="row">
			<!--<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1852458366311882"
				 crossorigin="anonymous"></script>-->
			<!--<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-1852458366311882"
				 data-ad-slot="9695154552"
				 data-ad-format="auto"
				 data-full-width-responsive="true"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>-->
			
			
			<!-- ADS TWO -->
			<script type="text/javascript">
				atOptions = {
					'key' : '150f352f43334939aa8f402832f8125f',
					'format' : 'iframe',
					'height' : 60,
					'width' : 468,
					'params' : {}
				};
				document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.variousformatscontent.com/150f352f43334939aa8f402832f8125f/invoke.js"></scr' + 'ipt>');
			</script>
			<!-- ADS TWO -->
		</div>
	</div>
<!-- =======================
 Highlights START -->
<section class="position-relative">
	<div class="container" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->			
			<div class="col-lg-9">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
					<p>Latest breaking news, pictures, videos, and special reports</p>
				</div>
				
            <div class="row filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
               <!-- Card item START -->	
               <?php foreach ($featuresAry as $singleTitle): ?>			
               <div class="col-sm-6 col-lg-4 grid-item">
                  <div class="card mb-4">
                    	<!-- Card img -->
                     <div class="card-fold position-relative">
                      
					  <?php 
						 if ($singleTitle["image"] == "") { 
						 	echo "<img class='card-img' src='img/default-img.png' alt='Card image'>";
						 }else{
						 	echo "<img class='card-img' src='img/".$singleTitle["image"]."' alt='Card image'>";
						 }
					  ?>
                     </div>
                     <div class="card-body px-0 pt-3">
                        <h4 class="card-title">
                        	<?php 
                        		echo "<a href='post-single-en.php?post=".$singleTitle['id']."' class='btn-link text-reset stretched-link fw-bold'>".
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
			   	 		$newsCount = $user->getEngNewsCount();	
			   	 		$newsCountInt = (int)$newsCount[0]['c'];					   	 		

			   	 		$total_page = ceil($newsCountInt/$num_per_page);

				   	 	if($page>1)
	                {	    	                     	          
	                    
				        		echo "<li class='page-item flex-fill text-center'> <a href='index.php?page=".($page-1)."' class='page-link'> <i class='fas fa-long-arrow-alt-left me-2 rtl-flip'></i> Previous</a>	</li>"; 
				        			 				        				
	                }
	            if($page < $total_page) {                	
			        			echo "<li class='page-item flex-fill text-center'> <a href='index.php?page=".($page+1)."' class='page-link'>	Next <i class='fas fa-long-arrow-alt-right ms-2 rtl-flip'>
			        			</i></a></li>"; 
			        			}
			      ?>			   	 

			    </ul>
		  </nav>
			</div>
			<!-- Main Post END -->
			<!-- ADS TWO -->
			<script async="async" data-cfasync="false" src="//pl16754829.effectivegatetocontent.com/4248a5de0ff3410673d59bd750905110/invoke.js"></script>
<div id="container-4248a5de0ff3410673d59bd750905110"></div>
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
											if ($singleRecentNews["image"] == "") {
												echo"<img class='rounded lazy' data-src='img/default-img.png' alt='Card Image'>";
											}else{
												echo"<img class='rounded lazy' data-src='img/".$singleRecentNews["image"]."' alt='Card Image'>";
											}      											
										?>
									</div>
									<div class="col-8">
										<h6>
											<?php 
                        		echo "<a href='post-single-en.php?post=".$singleRecentNews['id']."' class='btn-link stretched-link text-reset fw-bold'>".
                        		substr( $singleRecentNews['title'], 0, 40 )."</a>";
                        	 ?>
										</h6>
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




<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>



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
					<div class="text-center text-md-start text-primary-hover text-muted">©2021 &nbsp; &nbsp; Developed by <a href="indexen.php" class="text-reset text-decoration-underline">HtooMedia</a> . &nbsp; &nbsp; All rights reserved. 
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
<script src="assets/vendor/vanilla-lazyload/lazyload.min.js"></script>
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="assets/vendor/imagesLoaded/imagesloaded.js"></script>
<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
</body>
</html>