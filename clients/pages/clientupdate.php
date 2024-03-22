<?php
include("../connection.php");
include("side.php"); ?>
</section>
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
                <h5>Update Users</h5>
              </div>
              <div class="row px-xl-5 px-sm-4 px-3">
               
              </div>
              <div class="card-body">
			  
	          <!-- form start -->
			<?php
			
			$i=1;
			$aid=$_GET['aid'];
			$qry1=mysqli_query($con,"select * from tbl_users where id= $aid");
			$row=mysqli_fetch_array($qry1);
			
					
					
		?>	
         <form id="form_validation" method="POST" action = "about_insert.php?aid=<?php echo $row['id'];?>" enctype="multipart/form-data">
        	
		                        <div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>" required="required" />
									</div>
                                </div>
        
								<div class="form-group form-float">
									<div class="form-line">
									<label class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['mailid'];?>"required="required" />
                                    </div>
                                </div>

                               
								<div class="form-group form-float">
									<div class="form-line">
									<label class="form-label">Mobile Number</label>
                                    <input type="text" name="mnumber" id="mnumber" class="form-control" value="<?php echo $row['number'];?>" required="required" />
                                    </div>
                                </div>
                              
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Activation Date</label>
                                                           
									 <input type="date" name="date" id="date"  value="<?php echo $row['regdate'];?>" class="form-control" required="required" />
                                     </div>
                                </div>
                                    
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    
				</form>
			
	</div>
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
