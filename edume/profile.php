<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/profile_page.css">



	
</head>
<body>

 



	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="img/user2.jpg" alt="Image" class="shadow">
						</div>
						 
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Security
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Application
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>
						<a class="nav-link" id="notification-tab"   href="index.php">
							  
							Back To Home
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<h3> <label>User Name</label></h3>
									 <span><?php echo $_SESSION['username'] ?></span>
								</div>
							</div>
							 
							<div class="col-md-6">
								<div class="form-group">
								  	<h3><label>Email</label></h3>
                                      <span><?php echo $_SESSION['email'] ?></span>
								</div>
							</div>
							 
							 
							 
						</div>
						 
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<form method="POST" action="change_password.php" onsubmit="return validation()" >
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" name='old_pass' class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" name='new_pass' id='pw' class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="text" id='cpw' class="form-control">
								</div>
							</div>
							<span id="perror"></span>
						</div>
						<div>
							
							<input type="submit" value="update" class="btn btn-primary"/>
						</div>
					</form>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						 <span>Soon be Avaible</span>
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<span>Soon be Avaible</span>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<span>Soon be Avaible</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
	
      function validation() {
        var pw=document.getElementById('pw').value;
        var cpw=document.getElementById('cpw').value;
      
        if ((pw=="") ||( cpw=="") || pw!=cpw)
         {
           document.getElementById('perror').innerHTML="please fill the Right details";
           return false;
         }
      }
      
      </script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
