
<?php
include("../connection.php");
// Include and instantiate the class.
session_start();
if(isset($_SESSION['id']))
	{ 
		$qry = "SELECT * from tbl_users where id=".$_SESSION['id'];
		$cmd=mysqli_query($con,$qry) or die(mysqli_error($con));
		$row=mysqli_fetch_array($cmd);
			if($row['type']=="Admin" && $row['id'] == $_SESSION['id'])
			{
				header("location:dashboard.php");
			}
			
			else
			{
			header("location:../client/dashboard.php");
			}
	}
if(isset($_POST['submit']))
	{
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['password'];
		//$role=$_REQUEST['role'];
		$qry = "SELECT * from tbl_users where mailid='$email' and password='$pass'";
		$cmd=mysqli_query($con,$qry) or die(mysqli_error($con));
		$row=mysqli_fetch_array($cmd);
			// Any mobile device (phones or tablets).
		if($email==$row['mailid'] && $pass==$row['password'] && $row['type']=="Admin")
			{      
				 $_SESSION['id']=$row[0];
				 header('Location:dashboard.php');
			}
			
		
		else if($email==$row['mailid'] && $pass==$row['password'] && $row['type']=='client' && $row['status']=='unlock')
			{ 
        
			 $_SESSION['id']=$row[0];
			 $time="select regdate from tbl_users where id =".$row[0];
			 $rstime=mysqli_query($con,$time);
			 $rowtime=mysqli_fetch_array($rstime);
			 $date1 = strtotime(date("Y-m-d"));  
			 $date2 = strtotime($rowtime[0]);  
	  // Formulate the Difference between two dates 
			 $diff = abs($date2 - $date1)/60/60/24;  
			if($diff>365)
				{		
					$extblockqry="update tbl_users set status = 'block' where id =".$_SESSION['id'];
					mysqli_query($con,$extblockqry);
					session_destroy();
					echo  "<script>window.location.href='login.php'; alert('Your cant login..Your id is under QC Fail Report And Report Checking Date Is Gone... Contact To Your Provider...!') </script>";
				}
							   


			else
				{    
				   $_SESSION['role']="client";
				   header("location:../client/dashboard.php");  
				}  		

			}
				
				 
			//}
	
    
   else
		{
             echo  "<script>window.location.href='index.php'; alert('Your cant login..may be id or password is incorrect Contact To Your Provider...!') </script>";
		}
    
	}
// Alternative method is() for checking specific properties.
// // WARNING: this method is in BETA, some keyword properties will change in the future.
// $detect->is('Chrome');
// $detect->is('iOS');
// $detect->is('UC Browser');
// // [...]
 
// // Batch mode using setUserAgent():
// $userAgents = array(
// 'Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19',
// 'BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103',
// // [...]
// );
// foreach($userAgents as $userAgent){
 
//   $detect->setUserAgent($userAgent);
//   $isMobile = $detect->isMobile();
//   $isTablet = $detect->isTablet();
//   // Use the force however you want.
 
// }
 
// // Get the version() of components.
// // WARNING: this method is in BETA, some keyword properties will change in the future.
// $detect->version('iPad'); // 4.3 (float)
// $detect->version('iPhone'); // 3.1 (float)
// $detect->version('Android'); // 2.1 (float)
//$detect->version('Opera Mini'); // 5.0 (float)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    BEST COP
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/index.php">
           Login To BEST-COP
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://api.whatsapp.com/send?phone=919773142392&text=%27i%20want%20to%20buy%20best%20cop%20portal%27">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Apply For Portal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/index.php">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  <form role="form" action="" method="POST" >
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
      <input type="submit" name="submit" Value="Login" class="btn bg-gradient-info w-100 mt-4 mb-0"></button>
                                            
				       </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="https://api.whatsapp.com/send?phone=919773142392&text=%27i%20want%20to%20buy%20best%20cop%20portal%27" class="text-info text-gradient font-weight-bold">Apply now</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
       
       
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Best-Cop.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
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