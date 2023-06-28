<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Da Vincent Code | Home</title>
	<?php require 'assets.php';?>
</head>
	<!-- <div id="full-screen">
			<div class="banter-loader">
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			  <div class="banter-loader__box"></div>
			</div>
	</div> -->
<body> 

	<div id="content-body" class="container">
		<div class="home-container">
			<div class="hello">
				<?php
				    if ($_SERVER["REQUEST_METHOD"] == "GET") {
				      $name = $_GET["name-inp"];
				      echo '<h1 id="user-name" style="color:whitesmoke;">Hello, ' . $name . '!</h1>';
				    }
				    else {
				      echo '<h1 id="user-name" style="color:whitesmoke;">Hello!</h1>';
				    }
				 ?>
			</div>
			<div class="home-message">
				I am <span class="main-text-color">Vincent Israel Prias</span>. I develop systems and websites.
			</div>
			<div class="col-md-12 px-5" id="menumenu">
			  <div class="ml-auto mr-auto justify-content-around home-nav row">
			  	<div class="col-md-2 text-center"><a class="">ABOUT</a></div>
			    <div class="col-md-2 text-center"><a class="">SKILLS</a></div>
			    <div class="col-md-2 text-center"><a class="">EXPERIENCE</a></div>
			    <div class="col-md-2 text-center"><a class="">CONTACT</a></div>
			  </div>
			</div>
		</div>


		<div class="about-container pt-3">
		  <div class="row w-100">
		    <div class="col-md-6 text-center col-sm-12 p-3">
		    	<div class="d-flex flex-column">
			        <h6 id="about-title">ABOUT</h6>
			        <h1 id="about-title">ME</h1>
			    </div>
		    </div>
		    <div class="col-md-6 col-sm-12 p-3 d-flex align-items-center">
			  <div class="d-flex flex-column">
			    <span class="d-block">System Developer;</span>
			    <span class="d-block">Web Developer;</span>
			    <span class="d-block">Tech Enthusiast;</span>

			    <div class="about-desc mt-3">
			  	<p>
			  		"Experienced tech enthusiast with a passion for innovation, collaboration, and continuous improvement. Skilled in software development, system administration, and effective communication. Valuable asset for successful project outcomes."
			  	</p>
			  </div>
			  </div>
			  
			</div>
		  </div>
		</div>

		<div class="skills-container">
			<h1>SKILLS</h1>
			<div class="carousel-container">
			   <section class="tech-logos slider slick-list">
			      <div class="slide d-flex align-items-center justify-content-center">
			      	<div class="text-center">
				      	<img class="logo-img" src="../assets/images/html5.png">
				      	<!-- <h3 style="color:whitesmoke;">Advance</h3> -->
			      	</div>
			      </div>
			      <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/css3.png"></div>
			      <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/php.png"></div>
			       <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/js.png"></div>
			       <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/bs.png"></div>
			       <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/csharp.png"></div>
			       <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/react.png"></div>
			       <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/node.png"></div>
			       <div class="slide d-flex align-items-center justify-content-center"><img class="logo-img" src="../assets/images/sql.png"></div>
			   </section>
			</div>
		</div>	

		<!-- <div class="sidebar">
		  <a class="active" href="#home"><i class="fa fa-home" aria-hidden="true"></i><span class="menutext">&nbsp;Home</span></a>
		  <a href="#education"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="menutext">&nbsp;Education</span></a>
		  <a href="#experience"><i class="fa fa-bars" aria-hidden="true"></i><span class="menutext">&nbsp;Experience</span></a>
		  <a href="#projectsdone"><i class="fa fa-rocket" aria-hidden="true"></i><span class="menutext">&nbsp;Projects</span></a>
		  <a href="#contact"><i class="fa fa-user" aria-hidden="true"></i><span class="menutext">&nbsp;Contact</span></a>
		</div> -->
	</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('.tech-logos').slick({
          dots: false,
          arrows: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  autoplay: true,
          autoplaySpeed: 3000,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
	    });
  });

</script>