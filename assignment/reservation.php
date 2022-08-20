<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taste.it - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	


	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body> 
<?php
//INCLUDE CONNECTION LINK
include("include/connection.php");
	//TABLE FORM VALIDATION 
 
	$name="";
    $email="";
    $phone="";
    $date="";
    $time="";
    $chair="";
    

    if(isset($_POST['submit'])){
      if(!empty($_POST['name'])){
        $name=$_POST['name'];
      }
      if(!empty($_POST['email'])){
        $email=$_POST['email'];
      }
      if(!empty($_POST['phone'])){
        $phone=$_POST['phone'];
      }
      if(!empty($_POST['date'])){
        $date=$_POST['date'];
      }
	  if(!empty($_POST['time'])){
        $time=$_POST['time'];
      }	
	   if(!empty($_POST['chair'])){
        $chair=$_POST['chair'];
      }
	  // INSERT IN DATABASE
	  $sql = "INSERT INTO booking(name,email,phone,date,time,chair)
	  VALUES('$name','$email','$phone','$date','$time','$chair')";
	   if(mysqli_query($c,$sql)){
		   echo "OKAY!";
	   }
	   else{
		   echo "Error!";
	   }
  } 

?>
	
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			
			

			
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item"><a href="t.php" class="nav-link">show detabase</a></li>
				</ul>
			
		</div>
	</nav>
	<!-- END nav -->
	
	<div style="color:green; text-align:center; font-family:arial; font-size:25px;position:relative; top:130px; margin-right:70px;"> 

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form action="reservation.php" method="post" class="a ppointment-form">
						<h3 class="mb-3">Booking Table</h3>
						
						
		
						<div class="row">
						<div  id="login-column" class="col-xs-6 col-xs-offset-3"> 
				<div class="box"> 
						<div class="float" style="border:1px solid; padding:30px; margin-top:150px; border-radius:3px; background:#000;"> 
							<div class="col-md-10">
								
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Name"pattern="^[A-Za-zا-ی]+$" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Enter Your Email"pattern="^[a-z9-0_@.]+$" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="phone" class="form-control" placeholder="Enter Your Phone"minlength="10" pattern="^[0-9۰-۹+]+$" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="date"name="date" class="form-control" placeholder=""required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text"name="time" class="form-control book_time" placeholder="Time"required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<input type="text" name="chair" class="form-control " placeholder="You can select 1 - 5 chair"required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="submit" value="Book Your Table Now" name="submit" class="btn btn-white py-3 px-4"  style="background:#fff; color:#000; border-radius:3px;" >
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	
		
	</body>
	</html>