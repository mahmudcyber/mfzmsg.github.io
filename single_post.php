 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
 	<?php 
	 include'includes/header.php'; 
 	 include'admin/dbconnect.php'; 
 
	
?>
 </header>
 <!-- End Header -->

 <!-- ======= Main body ======= -->
 <div id="main">
 	<section id="services" class="services  section-bg ">

 		<div class="section-title pt-5" data-aos="fade-left">
 			<h2>News and Update</h2>
 		</div>

 	</section><!-- End Services Section -->

 	<!-- ##### Breadcrumb Area Start ##### -->
 	<div class="vizew-breadcrumb">
 		<div class="container">
 			<div class="row">
 				<div class="col-12">
 					<nav aria-label="breadcrumb">
 						<ol class="breadcrumb">
 							<li class="breadcrumb-item"><a href="newsUpdate.php"><i class="fa fa-home" aria-hidden="true"></i> News and Update</a></li>
 							<li class="breadcrumb-item"><a href="#main">Single Post</a></li>

 						</ol>
 					</nav>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ##### Breadcrumb Area End ##### -->

 	<!-- ##### Pager Area Start ##### -->
 	<div class="vizew-pager-area">
 		<div class="vizew-pager-prev">
 			<p>PREVIOUS UPDATE</p>
			<?php 
			$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id desc limit 1,1");
			if(mysqli_num_rows($query) > 0){
				while($row = mysqli_fetch_assoc($query)){
					$id = $row['id'];
					$news_headline = $row['news_headline'];
					$news_poster_name = $row['news_poster_name'];
					$time_posted = $row['time_posted'];
					$date_posted = $row['date_posted'];
					$image = 'admin/'.$row['news_photo'];
					
 			echo "
			<!-- Single Feature Post -->
 			<div class=\"single-feature-post video-post bg-img pager-article\" style=\"background-image: url($image);\">
 				<!-- Post Content -->
 				<div class=\"post-content\">
 					<a href=\"single_post.php?id=$id\" class=\"post-cata cata-sm\">Read</a>
 					<a href=\"single_post.php?id=$id\" class=\"post-title\">$news_headline</a>
 					<div class=\"post-meta d-flex align-items-center mb-2\">
 						<a href=\"single_post.php?id=$id\" class=\"post-author\">By $news_poster_name</a>
 						<i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
 						<a href=\"single_post.php?id=$id\" class=\"post-date\">$date_posted</a>
 					</div>
 				</div>

 			</div>";
				}
			}
			?>
 		</div>

 		<div class="vizew-pager-next">
 			<p>NEXT UPDATE</p>
			<?php 
			$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id desc limit 2,1");
			if(mysqli_num_rows($query) > 0){
				while($row = mysqli_fetch_assoc($query)){
					$id = $row['id'];
					$news_headline = $row['news_headline'];
					$news_poster_name = $row['news_poster_name'];
					$time_posted = $row['time_posted'];
					$date_posted = $row['date_posted'];
					$image = 'admin/'.$row['news_photo'];
					
 			echo "<!-- Single Feature Post -->
 			<div class=\"single-feature-post video-post bg-img pager-article\" style=\"background-image: url($image);\">
 				<!-- Post Content -->
 				<div class=\"post-content\">
 					<a href=\"single_post.php?id=$id\" class=\"post-cata cata-sm \">Read</a>
 					<a href=\"single_post.php?id=$id\" class=\"post-title\">$news_headline</a>
 					<div class=\"post-meta d-flex align-items-center mb-2\">
 						<a href=\"single_post.php?id=$id\" class=\"post-author\">By $news_poster_name</a>
 						<i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
 						<a href=\"single_post.php?id=$id\" class=\"post-date\">$date_posted</a>
 					</div>
 				</div>

 			</div>
 	
		</div>";
				}
			}
		?>
 	</div>
 	<!-- ##### Pager Area End ##### -->

 	<!-- ##### Post Details Area Start ##### -->
 	<section class="post-details-area mb-80">
 		<div class="container">
 			<div class="row">				
					<div class="col-12">
						<?php 
							if(isset($_GET['id'])){
								 $id = $_GET['id'];
								 $query = mysqli_query($conn, "select * from news where id = '$id'");

								 if(mysqli_num_rows($query) > 0){
									$row = mysqli_fetch_assoc($query);
									 $news_headline = $row['news_headline'];
									 $news_poster_name = $row['news_poster_name'];
									 $news_body = nl2br($row['news_body']);
									 $time_posted = $row['time_posted'];
									 $date_posted = $row['date_posted'];
									 $image = 'admin/'.$row['news_photo'];

						echo "
 					<div class=\"post-details-thumb mb-50\">
 						<img src=\"$image\" alt=\"\" width=\"100%\">
 					</div>
 				</div>
 			</div>

 			<div class=\"row justify-content-center\">
 				<!-- Post Details Content Area -->
 				<div class=\"container\">
 					<div class=\"post-details-content\">
 						<!-- Blog Content -->
 						<div class=\"blog-content\">

 							<!-- Post Content -->
										 
	 					<div class=\"post-content mt-4\" data-aos=\"fade-up\">
 								<a href=\"#\" class=\"post-cata cata-sm c\">Read</a>
 								<h2 class=\"post-title mb-2\">$news_headline</h2>

 								<div class=\"post-meta d-flex align-items-center mb-2\">
 									<span  class=\"post-author text-muted\">By $news_poster_name</span>
 									<i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
 									<span  class=\"post-date text-muted\">$date_posted</span>
 								</div>

 								<p>$news_body</p>

 								<div class=\"share-post-widget data-aos=fade-left\">
 									<p>Share This Post on: </p>
 									<a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a>
 									<a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter</a>
 									<a href=\"#\" class=\"google\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i> Google+</a>
 								</div>
 							</div>";
								 }
							}
							?>


 							<!-- Related Post Area -->
 							<div class="related-post-area mt-5 ">
 								<!-- Section Title -->
 								<div class="section-heading style-2">
 									<h4>Related Post</h4>
 									<div class="line"></div>
 								</div>

 								<div class="row">
									
									<?php
									  									
										$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id asc limit 16,2");
											if(mysqli_num_rows($query) > 0){
												while($row = mysqli_fetch_assoc($query)){
													$id = $row['id'];
													$news_headline = $row['news_headline'];
													$news_poster_name = $row['news_poster_name'];
													$time_posted = $row['time_posted'];
													$date_posted = $row['date_posted'];
													$image = 'admin/'.$row['news_photo'];

													echo"	<!-- Single Blog Post -->
														<div class=\"col-12 col-md-6\">
															<div class=\"single-post-area mb-50\" data-aos=\"fade-up\">
																<!-- Post Thumbnail -->
																<div class=\"post-thumbnail\">
																	<img src=\"$image\" alt=\"\">

																</div>

																<!-- Post Content -->
																<div class=\"post-content\">
																	<a href=\"#\" class=\"post-cata cata-sm \">Read</a>
																	<a href=\"single_post.php?id=$id\" class=\"post-title\">$news_headline</a>
																	<div class=\"post-meta d-flex align-items-center mb-2\">
																		<a href=\"single_post.php?id=$id\" class=\"post-author text-muted\">By $news_poster_name</a>
																		<i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
																		<a href=\"single_post.php?id=$id\" class=\"post-date\">$date_posted</a>
																	</div>

																</div>
															</div>
														</div>";
												}
											}
									?>
													

 									
 								</div>
 							</div>

 							<hr>

 							<!-- Post A Comment Area -->
 							<div class="post-a-comment-area mt-5">

 								<!-- Section Title -->
 								<div class="section-heading style-2">
 									<h4>Leave a reply</h4>
 									<div class="line"></div>
 								</div>

 								<!-- Reply Form -->
 								<section id="contact" class="contact">

 									<div data-aos="fade-left">
 										<form action="forms/contact.php" method="post" role="form" class="php-email-form">
 											<div class="form-row">
 												<div class="col-md-6 form-group">
 													<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
 													<div class="validate"></div>
 												</div>
 												<div class="col-md-6 form-group">
 													<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
 													<div class="validate"></div>
 												</div>
 											</div>

 											<div class="form-group">
 												<textarea class="form-control" name="commrnt" rows="5" data-rule="required" data-msg="Please write your comment" placeholder="comment"></textarea>
 												<div class="validate"></div>
 											</div>
 											<div class="mb-3">
 												<div class="loading">Loading</div>
 												<div class="error-message"></div>
 												<div class="sent-message">Your message has been sent. Thank you!</div>
 											</div>
 											<div class="text-center"><button type="submit">Comment</button></div>
 										</form>
 									</div>
 								</section>

 							</div>
 						</div>
 					</div>

 				</div>
 			</div>
 		</div>
 	</section>
 	<!-- ##### Post Details Area End ##### -->

 	<!--  login modal-->

 	<!-- Modal -->
 	<div class="w3-modal" id="myModal">

 		<div class="w3-modal-content w3-card rounded w3-animate-zoom" style="max-width:400px; max-height:800px;">
 			<header>
 				<h4 class="text-center form-h py-4">Login</h4>
 				<span onclick="document.getElementById('myModal').style.display='none'" class="w3-closebtn mr-2 mt-2 w3-display-topright" style="font-size:26px; cursor: pointer;">&times;</span>
 			</header>
 			<div class="w3-container">

 				<form>
 					<div id="msg"></div>
 					<div class="form-group">
 						<label class="small mb-1" for="inputEmailAddress">Email</label>
 						<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
 						<label class="emailEmpty text-danger"></label>
 					</div>
 					<div class="form-group">
 						<label class="small mb-1" for="inputPassword">Password</label>
 						<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
 						<label class="passwordEmpty text-danger"></label>
 					</div>
 					<div class="form-group">
 						<div class="custom-control custom-checkbox">
 							<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
 							<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
 						</div>
 					</div>
 					<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
 						<a class="small text-primary" href="password.php">Forgot Password?</a>
 						<span class="loader" id="load"></span>
 						<a class="btn btn-login text-white" id="login">Login</a>
 					</div>
 				</form>
 			</div>


 		</div>
 	</div> <!-- end of modal -->
 </div>
 <!-- ======= Footer ======= -->
 <footer id="footer">
 	<?php include'includes/footer.php'; ?>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
 <script src="assets/vendor/counterup/counterup.min.js"></script>
 <script src="assets/vendor/venobox/venobox.min.js"></script>
 <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
 <script>
 	$(document).ready(function() {
 		$('#login').click(function() {
 			const username = $("#inputEmailAddress").val();
 			const password = $("#inputPassword").val();

 			const valid_email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

 			if (username == "") {
 				$(".emailEmpty").html('email is required!');
 			} else if (username.trim() == "") {
 				$(".emailEmpty").html('email is required!');
 				return false;
 			} else if (!valid_email.test(username)) {
 				$(".emailEmpty").html('Invalid email address!');
 				return false;
 			}
 			if (password.trim() == "") {
 				$(".passwordEmpty").html('password is required!');
 				return false;
 			}

 			$.ajax({
 				url: "admin/process.php",
 				data: 'page=loginForm' + '&username=' + username + '&password=' + password,
 				type: "POST",
 				beforeSend: function() {
 					$("#login").hide();
 					$("#load").css('display', 'block')
 					$('.process').html('processing request...');
 				},
 				success: function(result) {
 					setInterval($("#msg").html(result), 2000);
 					$("#login").show();
 					$("#load").hide();


 				}
 			});

 		});
 	});
 </script>


 </body>

 </html>
 <!DOCTYPE html>
 <html lang="">

 <head>
 	<meta charset="utf-8">
 	<title>Example Title</title>
 	<meta name="author" content="Your Name">
 	<meta name="description" content="Example description">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="">
 	<link rel="icon" type="image/x-icon" href="" />
 </head>

 <body>
 	<header></header>
 	<main></main>
 	<footer></footer>
 	<script type="text/javascript" src=""></script>
 </body>

 </html>