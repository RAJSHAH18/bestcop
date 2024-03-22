<?php
include("../connection.php");
include("side.php"); ?>
<head> 
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css'>
 
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

tr:nth-of-type(odd) {
  background: #f4f4f4;
}

tr:nth-of-type(even) {
  background: #fff;
}

th {
  background: #5cb85c;
  color: #ffffff;
  font-weight: 300;
}

td,
th {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
}

td:nth-of-type(1) {
  font-weight: 500 !important;
}

td {
  font-family: 'Roboto', sans-serif !important;
  font-weight: 300;
  line-height: 20px;
}

span {
  font-style: italic
}

@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {

  table.responsive,
  .responsive thead,
  .responsive tbody,
  .responsive th,
  .responsive td,
  .responsive tr {
    display: block !important;
  }

  .responsive thead tr {
    position: absolute !important;
    top: -9999px;
    left: -9999px;
  }

  .responsive tr {
    border: 1px solid #ccc;
  }

  .responsive td {
    border: none;
    border-bottom: 1px solid #eee !important;
    position: relative !important;
    padding-left: 25% !important;
  }

  .responsive td:before {
    position: absolute !important;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap !important;
    font-weight: 500 !important;
  }

 
  .responsive td:before {
    content: attr(data-table-header) !important;
  }
} </style>
</head>
<hr>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>IMEI table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="sort">
                    <thead>
                                        <tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
 					                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMEI</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Locations</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Latitude</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Longitude</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Update</th>
                                      	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>                                       
									  
											
                                        </tr>
                                    </thead>
					
                                    <tfoot>
                                        <tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
 					                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMEI</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Locations</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Latitude</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Longitude</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Update</th>
                                      	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>                                       
								                        
									   </tr>
                                    </tfoot>
                                    <tbody>
				  	<?php
                		$sql_emp = "select * from tbl_imei order by id desc";
                		$rs_emp = mysqli_query($con,$sql_emp);
                		if(!$rs_emp)
						{
							die(mysqli_error($con));
						}
						while($row_emp = mysqli_fetch_array($rs_emp))
						{ ?>
				 <tr>
                     
					<td data-table-header="ID">
                        <div class="d-flex px-2 py-1">
                          <div>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row_emp['id']; ?></h6>
						  </div>
						</div>
                    </td>
                    
					<td data-table-header="Name" >
                        <h6 class="mb-0 text-sm"><?php echo $row_emp['mobileno']; ?></h6>
                    </td>
					 
					<td data-table-header="Number" class="align-middle text-center text-sm">
						<h6 class="mb-0 text-sm"><?php echo $row_emp['imei']; ?></h6>
                    </td>
                     
 <td data-table-header="Email ID" class="align-middle text-center">
                       <h6 class="mb-0 text-sm"><?php echo $row_emp['location']; ?></h6>
                    </td>
					<td data-table-header="Email ID" class="align-middle text-center">
                       <h6 class="mb-0 text-sm"><?php echo $row_emp['latitude']; ?></h6>
                    </td>
 
					<td data-table-header="Registration date" class="align-middle text-center">
						<h6 class="mb-0 text-sm"><?php echo $row_emp['loglongitude']; ?></h6>
                                           
					</td>
					<td data-table-header="Registration date" class="align-middle text-center">
						<h6 class="mb-0 text-sm"><?php echo $row_emp['upldate']; ?></h6>
                                           
					</td>
					
					
                    

					<td data-table-header="Action" class="align-middle">
                       <a href="#" class="todo-remove" onclick="return checkDelete()">
                            	<script language="JavaScript" type="text/javascript">
                                    function checkDelete(){
                                        return confirm('Are you sure?');
										
                                    }
                                </script>

                        <i class="fa fa-trash-o" style="font-size:24px; color:deeppink;" alt="delete"></i></a>
                    </td>
                </tr>

					<?php	}
                	?>
                                  
					
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script >// Code By Webdevtrick ( https://webdevtrick.com )
$(document).ready(function() {
   $("#sort").DataTable({
      columnDefs : [
    { type : 'date', targets : [3] }
],  
   });
});</script>
  <?php include("footer.php");?>
   <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Best Cop Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
       
        </div>
      </div>
    </div>
  </div>
 
 <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
    

<script type="text/javascript">
var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
	