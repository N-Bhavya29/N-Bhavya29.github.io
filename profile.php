<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">



	</head>
	<body>
		
	
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							               <?php
                        if(isset($_FILES['photo'])){
                            $file_tmp_name =$_FILES['photo']['tmp_name'];
                            $str = file_get_contents($file_tmp_name);
                            $b64img=base64_encode($str);}
                            echo '<div class="profile-thumb" style="background: url(data:image/'.$_FILES['photo']['type'].";base64,".$b64img.'" alt="Mobirise Website Builder);"></div>';
                            ?>
							
							<h1><span><?php echo $_POST["name"]; ?></span></h1>
							<!-- <h3><span>Web Developer / Photographer</span></h3> -->
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter2"></i></a></li>
									<li><a href="#"><i class="icon-facebook2"></i></a></li>
									<li><a href="#"><i class="icon-linkedin2"></i></a></li>
									<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block"><?php echo $_POST["name"]; ?></span></li>
						<li><span class="first-block">Phone:</span><span class="second-block"><?php echo $_POST["phone"]; ?></span></li>
						<li><span class="first-block">Email:</span><span class="second-block"><?php echo $_POST["email"]; ?></span></li>
						<li><span class="first-block">Website:</span><span class="second-block"><?php echo $_POST["website"]; ?></span></li>
						<li><span class="first-block">Occupation:</span><span class="second-block"><?php echo $_POST["occupation"]; ?></span></li>
					</ul>
				</div>
				<div class="col-md-8">
					
					<p><?php echo $_POST["about"]; ?></p>
					
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook3"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div class="workexperiance"><h3>Work Experience</h3></div>
						</li>
						<?php $role = $_POST["role"]; $company = $_POST["companyname"]; 
										$experianceduration = $_POST["experianceduration"]; $aboutexperiance = $_POST["aboutexperiance"];
						  ?>
									<?php
										for ($x = 0; $x < count($role); $x++) {
											echo 						
											'<li class="animate-box timeline-unverted">
											  <div class="timeline-badge"><i class="icon-suitcase"></i></div>
											  <div class="timeline-panel">
												  <div class="timeline-heading">
													  <h3 class="timeline-title"> '.$role[$x].'
													  
													  </h3><span class="company">'.$company[$x].' - '.$experianceduration[$x].'</span></div>
													  <div class="timeline-body">
														  <p>'.$aboutexperiance[$x].'</p>
														  </div>';
													if ($x < sizeof($role)-1){
													 echo ' <li class="timeline-inverted animate-box">
											  <div class="timeline-badge"><i class="icon-suitcase"></i></div>
											  <div class="timeline-panel">
												  <div class="timeline-heading">
													  <h3 class="timeline-title">'.$role[$x+1].'
													  </h3></div>
													  <div class="timeline-body">
													  <p>'.$aboutexperiance[$x+1].'</p>
													  </div></li>';}
													  $x++;
													  
											
											}
											?>
									
										
										<!-- </li>
										
										for ($x = 0; $x < sizeof($ExperiencenArray)-1; $x++) {
											echo '';
											$x++;
											//   break;
											
										}
										
										
										</div>
										</li> -->
										
										
										<br>
										<li class="timeline-heading text-center animate-box">
							<div class="workexperiance"><h3>Education</h3></div>
						</li>
						<?php $course = $_POST["course"]; $institute = $_POST["institute"]; $duration = $_POST["duration"];?>
						<?php
						for ($x = 0; $x < count($course); $x++) {
							echo '<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">'.$course[$x].'</h3>
									<span class="company">'.$institute[$x].' - '.$duration[$x].'</span>
									</div>
								';
						if ($x < sizeof($course)-1){
							echo
							'<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">'.$course[$x+1].'</h3>
									<span class="company">'.$institute[$x+1].' - '.$duration[$x+1].'</span>
								</div>
							</li>';
						
						
						}
							
							$x++;
							}
							?>
						
						


			    	</ul>
				</div>
			</div>
		</div>
	</div>
	


	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<!-- <div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong>HTML5</strong>95%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="93"><span><strong>CSS3</strong>93%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>jQuery</strong>90%</span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="89"><span><strong>PHP</strong>89%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>AngularJS</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>Ruby</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Java</strong>90%</span></div>
				</div>
			</div> -->
			<div class="row">
				<div class="col-md-6">
					<?php $skills = $_POST["skills"];$range = $_POST["percent"];
					for($i = 0; $i < count($_POST["skills"]); $i++){
						echo '<div class="progress-wrap">
						<h3><span class="name-left">'.$skills[$i].'</span><span class="value-right">'.$range[$i].'%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-'.$i+1 .' progress-bar-striped active" role="progressbar"
						  aria-valuenow="'.$range[$i].'" aria-valuemin="0" aria-valuemax="100" style="width:'.$range[$i].'%">
						  </div>
						</div>
					</div>';
					} ?>
					<!-- <div class="progress-wrap">
						<h3><span class="name-left">HTML5/CSS3</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">WordPress</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Java</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Design</span><span class="value-right">100%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Ruby</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Python</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">jQuery</span><span class="value-right">75%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
						  </div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>






	
	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; 2017 Free HTML5 Template. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>


	

</html>

