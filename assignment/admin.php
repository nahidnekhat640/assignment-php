<!DOCTYPE html> 
<?php 
session_start();
?>
<html lang="en">
<head>
	<title>DERA restaurant CREATING BY BMNRS ORGANISATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css"> 
	
</head>
<body> 
<?php 
//INCLUDE CONNECTION LINK
include("include/connection.php");
	

?>

<?php 
	
	// START SESSION
	if(isset($_POST["username"])){
		$u = $_POST["username"];
		$p = $_POST["password"];
		if($u == "NAHID" && $p == "123"){
			$_SESSION["login"] = $u ;
			header("location:t.php");
		}else{
			header("location:admin.php?login=failed");
		}
	}
?>
<?php if(isset($_GET["authentication"])){?>
	<div style="color:red; text-align:center; font-family:arial; font-size:25px;position:relative; top:130px; margin-right:70px;"> 
			Please login first!
	</div>
<?php }?> 
<?php if(isset($_GET["logout"])){?>
	<div style="color:green; text-align:center; font-family:arial; font-size:25px;position:relative; top:130px; margin-right:70px;"> 
			you are successfully logged out!
	</div>
<?php }?>
	<div class="container"> 
		<div id="login-row"  class="row justify-content-center align-item-center"> 
			<div  id="login-column" class="col-xs-6 col-xs-offset-3"> 
				<div class="box"> 
					<div class="float" style="border:1px solid; padding:30px; margin-top:150px; border-radius:3px; background:#000;"> 
						<form action="" class="form" method="post">	 
							<div class="form-group">
								
								<input type="text" name="username" id="username" class="form-control" placeholder="username"/>
							</div>
							<div class="form-group">
								
								<input type="password" name="password" id="password" class="form-control" placeholder="password"/> 
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-info btn-md" Value="Login" style="background:#fff; color:#000; border-radius:3px;" />
								
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>	



		
		
	</body>
	</html>