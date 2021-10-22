
<?php



include ('..\include\database.inc.php');
include ('..\include\functions.inc.php');
include ('..\include\constants.inc.php');


	$msg="";
	$username="";
	$name="";
	$email="";
	$password="";
	$bio="";
	$dob="";
	$phone="";
	$id="";
	$image_status='required';


	if(isset($_GET['id']) && $_GET['id']>0){
		$id=getSafeVal($_GET['id']);

		$row=mysqli_fetch_assoc( mysqli_query($con,"select * from adminlogin where id='$id' ") );


		$username=$row['username'];
		$name=$row['name'];
		$email=$row['email'];
		$password=$row['password'];
		$bio=$row['bio'];
		$dob=$row['dob'];
		$phone=$row['phone'];
		

		$image_status="";

	}


if (isset($_POST['submit'])) {
	$username=getSafeVal($_POST['username']);
	$name=getSafeVal($_POST['name']);
	$email=getSafeVal($_POST['email']);
 	$password=getSafeVal($_POST['password']);
	$bio=getSafeVal($_POST['bio']);
	$dob=getSafeVal($_POST['dob']);
 	$phone=getSafeVal($_POST['phone']);


        $type=$_FILES['photo']['type'];
		//if id is not set then insert new package
		if($id==""){

			//add validations on image
			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
				$msg="Invalid image format";
			}
			else{

				$photo=rand(111111111,999999999).'_'.$_FILES['photo']['name'];
				move_uploaded_file($_FILES['photo']['tmp_name'],SERVER_PACKAGE_IMAGE.$photo);

			      mysqli_query($con,"INSERT INTO 'adminprofile'('photo', 'username', 'name', 'email', 'password', 'bio', 'dob', 'phone') VALUES ('$photo','$username','$name','$email','$password','$bio','$dob','$phone')");
			  	
			     
				redirect('login.php');

			}
		}
		
		else{
			//if id is set then update exsting package

			$image_condition="";
			if($_FILES['photo']['name']!=""){

				//add validations on image
				if($type!='image/jpeg' && $type!='image/png' && $type!='image/jpg'){
						$msg="Invalid image format";
				}
				else{
					$photo=rand(111111111,999999999).'_'.$_FILES['photo']['name'];
					move_uploaded_file($_FILES['photo']['tmp_name'],SERVER_PACKAGE_IMAGE.$photo);


					$image_condition=", photo='$photo' ";
		
				}
				

			}
			if($msg==""){
				mysqli_query($con,"update adminprofile set photo='$photo',username='$username',name='$name',email='$email',password='$password',bio='$bio',dob='$dob',phone='$phone' $image_condition where id='$id'  ");
				redirect('login.php');
			}
			
		}
		
		
	}



?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="..\..\asset\img_user\icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<link href="..\..\asset\css_admin\app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="../home.php">
          <span class="align-middle">Home</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="login.php">
						
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							  </svg> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="EditViewMore.php">
						<i class="align-middle" data-feather="book"></i>  <span class="align-middle">Edit View More Page</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="reports.php">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
  <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
</svg>
              <!--<i class="align-middle" data-feather="book"></i> --> <span class="align-middle">Reports</span>
            </a>
					</li>

					<li class="sidebar-header">
                  Packages
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="AddElement.php">
                  <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Package</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="ListElement.php">
                  <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">List Packages</span>
                  </a>
               </li>


					<li class="sidebar-header">
                  Category
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="AddCategory.php">
                  <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Add Package Catogery</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="listCategory.php">
                  <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Catogery List</span>
                  </a>
               </li>
				</ul>


				<div class="sidebar-cta">
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

			</nav>
           
<!--     PROFILE      -->

<main class="content">
  <div class="container-fluid p-0">


<div class="container light-style flex-grow-1 container-p-y">

        <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
            <!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a> -->
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

              <div class="card-body media align-items-center">
                <img src="..\..\asset\img_user\avatar.jpg" alt="" class="d-block ui-w-80">
                <div class="media-body ml-4">
				<div class="col-sm-4 mb-3">



<input class="form-control form-control-sm" type="file" id="photo" name="photo"  <?php echo $image_status; ?>>


</div> &nbsp;
                  

                  <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
              </div>
              <hr class="border-light m-0">

              <div class="card-body">
                <div class="form-group">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" required name="username" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" required name="name" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" required name="email" value="<?php echo $email; ?>">
                  <!-- <div class="alert alert-warning mt-3">
                    Your email is not confirmed. Please check your inbox.<br>
                    <a href="javascript:void(0)">Resend confirmation</a>
                  </div> -->
                </div>
                <!-- <div class="form-group">
                  <label class="form-label">Company</label>
                  <input type="text" class="form-control" value="Company Ltd.">
                </div>-->
              </div> 

            </div>
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Current password</label>
                  <input type="password" placeholder="Enter current password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">New password</label>
                  <input type="password" placeholder="Enter new password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Repeat new password</label>
                  <input type="password" placeholder="Repeate new password" class="form-control">
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="account-info">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Bio</label>
                  <textarea class="form-control" rows="3" id="bio" name="bio" required><?php echo $bio; ?></textarea>
                </div>
                <div class="form-group">
                  <label class="form-label">Birthday</label>
                  <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $dob; ?>">

                </div>
                


              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">

                <h6 class="mb-4">Contacts</h6>
                <div class="form-group">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                </div>
                <!-- <div class="form-group">
                  <label class="form-label">Website</label>
                  <input type="text" class="form-control" value="">
                </div> -->

              </div>
      
            </div>
            <!-- <div class="tab-pane fade" id="account-social-links">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" placeholder="https://twitter.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" placeholder="https://www.facebook.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Google+</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label class="form-label">LinkedIn</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" placeholder="https://www.instagram.com/user">
                </div>

              </div>
            </div> -->
           
              </div>
            </div>
          </div>
        </div>
      </div>
  
    <div class="text-right mt-3">
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
      <button type="button" class="btn btn-default">Cancel</button>
    </div>

 

</div>
</main>

<style type="text/css">
body{
    background: #f5f5f5;
    margin-top:20px;
}

.ui-w-80 {
    width: 80px !important;
    height: auto;
}

.btn-default {
    border-color: rgba(24,28,33,0.1);
    background: rgba(0,0,0,0);
    color: #4E5155;
}

label.btn {
    margin-bottom: 0;
}

.btn-outline-primary {
    border-color: #26B4FF;
    background: transparent;
    color: #26B4FF;
}

.btn {
    cursor: pointer;
}

.text-light {
    color: #babbbc !important;
}

.btn-facebook {
    border-color: rgba(0,0,0,0);
    background: #3B5998;
    color: #fff;
}

.btn-instagram {
    border-color: rgba(0,0,0,0);
    background: #000;
    color: #fff;
}

.card {
  width: 100%;
  justify-self: right;
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24,28,33,0.012);
}

.row-bordered {
    overflow: hidden;
}

.account-settings-fileinput {
    position: absolute;
    visibility: hidden;
    width: 1px;
    height: 1px;
    opacity: 0;
}
.account-settings-links .list-group-item.active {
    font-weight: bold !important;
}
html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
}
.account-settings-multiselect ~ .select2-container {
    width: 100% !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #000000 !important;
}
.material-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.material-style .account-settings-links .list-group-item.active {
    color: #000000 !important;
}
.dark-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
}
.dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4E5155 !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24,28,33,0.03) !important;
}



</style>

<script type="text/javascript">

</script>





<script src="..\..\asset\js_admin\app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>




            </body>
            </html>