 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
	<?php include'includes/header.php';
	 		include'newsFunctions.php';
	 		
	 ?>
  </header>
  <!-- End Header -->

<!-- ======= Main body ======= -->
<div id="main">
    <section id="services" class="services  section-bg ">
       
            <div class="section-title pt-5">
                <h2>News and Update</h2>
            </div>
             
    </section><!-- End Services Section -->
	
	
    <!-- ##### Hero Area Start ##### -->
    <section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters" data-aos="fade-up">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content">
						<!--from newsFunction.php-->
                        <?php echo single_tab_news(); ?>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="nav vizew-nav-tab" role="tablist" data-aos="fade-up">
						<!--from newsFunction.php-->
						<?php echo multi_tab_news(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### latest Posts Area Start ##### -->
    <section class="trending-posts-area">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>Latest News</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post -->
				
				<!--from newsFunction.php-->
              <?php echo latest_news(); ?>
            </div>

        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class="vizew-post-area mb-50">
        <div class="container" >
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>Popular News</h4>
                            <div class="line"></div>
                        </div>

                        <div class="row"  >
                            <!-- Single Blog Post -->
							
							<!--from newsFunction.php-->
                            <?php echo  popular_news(); ?>

                        </div>

                   

                        <!-- Section Heading -->
                        <div class="section-heading style-2 mt-5">
                            <h4>Most Read News</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Single Post Area -->
						
						<!--from newsFunction.php-->
                        <?php echo  most_read_news(); ?>


                   

                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget my-5" data-aos="fade-up">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-5" data-aos="fade-up">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 my-30">
                                <h4>Latest Video</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <video width="300" height="200" controls>
									<source src="#" type="video.mp4">
								</video>

                
                            </div>
							<div class="section-heading style-2 my-30 mt-4">
                                <h4>Accomplished Projects</h4>
                                <div class="line"></div>
                            </div>
							<?php echo projects_done(); ?>

                            
                        </div>

                     

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget newsletter-widget mb-5" data-aos="fade-up">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Newsletter</h4>
                                <div class="line"></div>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <!-- Newsletter Form -->
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
                                    <button type="submit" class="btn vizew-btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Vizew Psot Area End ##### -->
			
			
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
                    <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address"  />
                    <label class="emailEmpty text-danger"></label>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password"  />
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
                    <a class="btn btn-login text-white" id="login" >Login</a>
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
            $(document).ready(function(){
            $('#login').click(function(){
                const username = $("#inputEmailAddress").val();
                const password = $("#inputPassword").val();
				
				const valid_email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
                
                if (username == "") {
                    $(".emailEmpty").html('email is required!');
                }else if (username.trim() == "") {
                    $(".emailEmpty").html('email is required!');
					return false;
                }else if (!valid_email.test(username)) {
                    $(".emailEmpty").html('Invalid email address!');
					return false;
                }
                if(password.trim() == ""){
                    $(".passwordEmpty").html('password is required!');
                    return false;
                }       
                
                    $.ajax({
                    url: "admin/process.php",
                    data:'page=loginForm'+'&username='+username+'&password='+password,
                    type: "POST",
                    beforeSend: function(){
                        $("#login").hide();
                        $("#load").css('display','block')
                        $('.process').html('processing request...');
                    },
                    success: function (result) {
                        setInterval($("#msg").html(result),2000);
                        $("#login").show();
                        $("#load").hide();
                        
                        
                    }
                });            
            
            });
        });
        </script>


</body>

</html>