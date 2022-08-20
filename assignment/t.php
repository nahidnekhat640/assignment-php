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
	<link rel="stylesheet" href="css/style2.css" />
	
</head>
<body> 
<?php 
//INCLUDE CONNECTION LINK
include("include/connection.php"); 
//SESSION
	if(!isset($_SESSION["login"])){
		header("location:admin.php?authentication=failed");
	}


	  $search="";
    if(!empty($_POST['search'])){
      $search = $_POST['search'];
      $sql = "SELECT * FROM booking WHERE CONCAT(name, email, phone, date, time, chair) LIKE '%$search%'";

      $result = mysqli_query($c,$sql);

    }else{
      $sql = "SELECT * FROM booking";

      $result = mysqli_query($c,$sql);
    } 












?>
	
		

	</nav>
		<div class="table" style="margin-top:200px;">  
		<header class="first-h"> 
			<h2 class="title-1">Booking Table</h2>
		</header>
			<table class="tb-f">
				<tr>
					<th>Name</th>
					<th>Enter Email</th>
					<th>Phone</th>
					<th>Date</th>
					<th>Time</th>
					<th>Number of chair</th>
				</tr>
				<?php 
									// WHILE LOOP & TURN INFORMATION FROM DATABASE 
									$sql = "SELECT * FROM booking WHERE CONCAT (name, email, phone, date, time, chair)LIKE '%$search%'";
									$result = mysqli_query($c,$sql);
									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_row($result)){
											echo "<tr>";
												echo "<td>".$row[1]."</td>";
												echo "<td>".$row[2]."</td>";
												echo "<td>".$row[3]."</td>";
												echo "<td>".$row[4]."</td>";
												echo "<td>".$row[5]."</td>";
												echo "<td>".$row[6]."</td>";
												
											echo "</tr>";
										}
									}
				?>

			</table> 
		</div>	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

		
		
	</body>
	</html>