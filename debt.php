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
                <h2>Debt Management Department</h2>
            </div>
            <div class="row">
                <div class="col-lg-12" style="text-align: justify">
                <p >
						Debt Management Department is a specialized office established in 2008 in the Ministry, charged with
						general administration of debt related matters and recording of all liabilities of Zamfara State 
						Government and its MDAs.
					</p>
						<h4>Functions and Activities of Debt Management Department</h4>
						<ol class="ml-4">
							<li>
								Maintains a reliable database of all loans taken or guaranteed by the State or any of its agencies.
							</li>
							<li>
								Prepares and submit to the State a forecast of loan service obligations for each financial year.
							</li>
							<li>
								Prepares and implement a plan for the efficient management of State’s external and domestic debt obligation at sustainable levels compatible with the desired economic activities for growth and development, and participates in negotiations aimed at realizing those objectives.
							</li>
							<li>
								Verifies and reconciles External Debt services guaranteed or directly taken by the state with the Federal DMO.
							</li>
							<li>
								Verifies and Services domestic debt, guaranteed or directly taken by the Accountant General.
							</li>
							<li>
								On an agency basis, services debt taken by Local government Council or any of their agencies/organizations, where such debts guaranteed by the State Government.
							</li>
							<li>Advices the state on the re-structuring and re-financing of all debt obligations.</li>
							<li>Advices the State on the terms and conditions on which Monies are to be borrowed.</li>
							<li>
								Submits to the State for the consideration of the annual budgets, forecast of borrowing capacity for Local and Foreign currencies.
							</li>
							<li>
								Prepares a schedule of state obligations such as contingent liabilities, both explicit and implicit, and provide advice on policies and procedures for their Management.

							</li>
						</ol>

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

v

</body>

</html>