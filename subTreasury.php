 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
	<?php include'includes/header.php'; ?>
  </header>
  <!-- End Header -->

<!-- ======= Main body ======= -->
<div id="main">
    <section id="services" class="services  section-bg ">
        <div class="container">
            <div class="section-title pt-5" data-aos="fade-left">
                <h2>Sub-Treasury Department</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <p style="text-align: justify">
						Sub-Treasury is a department under the Accountant General Office responsible for payment 
						of Salaries to all MDAs, payment to contactors, retention of standing imprest and other payments.<br>
						State Sub-treasury has three sections:
					</p>
					<ul class="ml-4">
						<li>Salary Section.</li>
						<li>Main Account Section.</li>
						<li>Committee and Commission Section.</li>
					</ul>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
	
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