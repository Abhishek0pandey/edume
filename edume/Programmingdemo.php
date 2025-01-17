<?php 
	 session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>EduMe</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/Programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style type="text/css">
		.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}
.dropdown {
  position: relative;
  display: inline-block;
  margin-top:20px;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: inline-block; 
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}



.div1                           /* for title image*/
{
	margin-top: 10%;
   position: relative;
    height: 500px;
    width: 1263px;
    background:url(uploadimg/programming_image.png);
}


	</style>



</head>
<body>


			<!---Navigation Starts	----->

	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">EduMe</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
				<li> <a href="../../index.php">Home</a></li>
					<div class="dropdown">
					<li > <a href="" class="btn-success dropbtn" ><?php echo $_SESSION['username'];?></a></li>
					<div class="dropdown-content">
						<a href="profile.php">Go to profile Profile</a>
						 
						<li> <a href="logout.php" id="our-location" class="btn-success" >Logout</a></li>
					</div>
					</div>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Login Start------->

			<!-- <div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" enctype="multipart/form-data" action="imgdemo.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Language Name :</label>
								<input type="text" name="languagename" class="form-control">


								<label><i class="fa fa-lock fa-2x"></i>Language Description  :</label>
								<input type="text" name="languagedesc" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Language Image :</label>
								<input type="file" name="languageimg" class="form-control">

								<button id="btn-login" type="submit">Add Course</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>
 -->
         <!---Login Ends------->





<!-- 
<div>
	<img src="C:\Users\sunil\Pictures\wallpaper\be_all.jpg">
</div> -->


<div class="container-fluid  div1">
		
	</div>



 			<!---programming languages Section Start	----->
<br><br><br><br><br>
 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h2><b>PROGRAMMING LANGUAGES</b></h2>
 								<div class="sub-heading">
 									Following are the available programming languages <br>
 									Start learning today
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			   // session_start();

			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'uniquedeveloper');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p><b>
 											<?php echo $res['language_description']; ?>
			</b></p><br>
 										<a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
 									</div>
 								</div>
 							</div>

		

<?php } ?>



 				</div>
 				
 			</section>


 			<!---programming languages Section ends	----->


	<!---Contact us Section Start------->
    
<div id='footer'>
<div class="container-fluid justify-content-center">
    
    <hr class="mx-0 px-0">
    <footer>
        <div class="row justify-content-around mb-0 pt-5 pb-0">
            <div class=" col-11">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-12 font-italic align-items-center mt-md-3 mt-4">
                        <h5><span class="d-flex justify-content-center"> <img id='footer-img' src="img/logo1.png" width='250' class="img-fluid mb-1 "></span></h5>
                     </div>
                    <div class="col-md-3 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">Our Solution</li>
                            <li>Web Devlopment</li>
                            <li>Programming</li>
                            <li>Mern Full stack</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">Language</li>
                            <li>C</li>
                            <li>Java</li>
                            <li>Python</li>
                        </ul>
                    </div>
                    <div class="col-xl-auto col-md-3 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">Contact Us</li>
                            <li>abc@gmail.com</li>
                            <li>+91 000000000000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
								
</div>


			<!---Contact us Section Ends------->

			
</body>
</html>