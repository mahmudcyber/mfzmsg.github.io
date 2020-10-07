  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <?php include'includes/header.php'; ?>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>About</h2>
            
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About Us</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= --> 
    

    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">
         	<p>The management and control of all finances of the State Government as prescribed by the constitution of the country is the responsibility of the State Ministry of Finance. </p>
			   <p>	However, certain financial matters are regulated by other laws created by the State Assembly such as the Finance as well as the Annual Appropriation Law and Supplementary Appropriation Law and Allocation of Revenue Act of 1981 as amended.</p>
			   <p>The Ministry is organized to deliver on the above responsibilities of managing, controlling and monitoring revenues and expenditures of the State. To do this, its vision, mission and goals are shared out to its Departments and Parastatals/Agencies.
			   </p>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/work-process-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3></h3>
            <p class="font-italic">
            </p>
            <ul>
              <li><i class="icofont-check"></i> </li>
              <li><i class="icofont-check"></i> </li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/work-process-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3></h3>
            <p class="font-italic">
              
            </p>
            <p>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/work-process-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3></h3>
            <p></p>
            <ul>
              <li><i class="icofont-check"></i> </li>
              <li><i class="icofont-check"></i> </li>
              <li><i class="icofont-check"></i></li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/work-process-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3></h3>
            <p class="font-italic">
              
            </p>
            <p>
              
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Work Process Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2></h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/skills-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3></h3>
            <p class="font-italic">
              
            </p>
            <p>
              
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill"> <i class="val"></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"> <i class="val"></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"> <i class="val"></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"> <i class="val"></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
		 
    </section><!-- End Our Skills Section -->
	  
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

  </main><!-- End #main -->

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