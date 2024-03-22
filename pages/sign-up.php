<?php
include("../connection.php");
include("side.php"); ?>
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-1 pb-1 m-100 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-56"></span>
        <div class="container">
         
        </div>
		
      </div>
      <div class="container mt-0">
        <div class="row mt-lg-n40 mt-md-n11 mt-n10">
          <div class="col-xl-14 col-lg-15 col-md-17 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Add New Users</h5>
              </div>
              <div class="row px-xl-5 px-sm-4 px-3">
               
              </div>
              <div class="card-body">
			  
		         <form id="form_validation" method="POST" action = "regc.php">
                                <div class="form-group form-float">
                                    <div class="form-line">
							<label class="form-label">Name</label>
                                                                 
									  <input type="text" name="name" id="name" class="form-control" required="required" />
                                       </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
					     <label class="form-label">Email</label>
                                
					<input type="email" name="email" id="email" class="form-control" required="required" />
                                       </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
								       <label class="form-label">Mobile Number</label>
                               
								<input type="text" name="mnumber" id="mnumber" class="form-control"  required="required" />
                                      </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Activation Date</label>
                                                           
									 <input type="date" name="date" id="date" class="form-control" required="required" />
                                     </div>
                                </div>
								 
                               
                                </div>
                                   
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mx-auto text-center">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Company
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              About Us
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Team
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Products
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Blog
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Pricing
            </a>
          </div>
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-dribbble"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-twitter"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-instagram"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-pinterest"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-github"></span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by Creative Tim.
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>