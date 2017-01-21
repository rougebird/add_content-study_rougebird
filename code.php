<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<title> rougebird - Study Content Page </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function myFunction(id) 
			{
    			var x = document.getElementById(id);
    			if (x.className.indexOf("w3-show") == -1) 
    			{
        			x.className += " w3-show";
    			} 
    			else 
    			{ 
        			x.className = x.className.replace(" w3-show", "hello");
    			}
			}
		</script>
		<style>
			.shadowNfont
			{
				text-shadow: 0 1px 3px rgba(0,0,0, .5);
				font-family:"courier new";
				font-size:40px;
				font-weight:bold;				
			}
		</style>
		<?php

			error_reporting(E_ALL & ~E_NOTICE);

			$servername = "localhost:3306";
			$username = "rb_addC_user";
			$password = "1RkTxN);~U=6";
			
			//Connecting to DB
			$conn = mysqli_connect($servername,$username,$password,"study_content");

			if (!$conn) {
    			die("Connection failed: " . mysqli_connect_error());
			}
		?>
	</head>
	<body>
		<?php require 'menu.php';?>	

	
		<div class="w3-container" style="margin-left:25px;margin-right: 25px">
			<h5>C# .NET Practicals (Code)</h5>
			<div class="w3-accordion w3-light-grey w3-card-2">
    			<?php 

    			$ce="codeEl";
    			$sql="SELECT * FROM content_cs_c";

    			$result=mysqli_query($conn,$sql);
  				if (mysqli_num_rows($result) > 0) 
  				{
    				// output data of each row
    				while($row = mysqli_fetch_assoc($result)) 
    				{
    					echo "<button onclick=\"myFunction('".$ce.$row["content_id"]."')\" class='w3-btn-block w3-left-align w3-teal w3-medium'> <i class='fa fa-code' ></i>&nbsp;&nbsp;". $row["content_title"] ."&nbsp;&nbsp;&nbsp; <i class='fa fa-caret-down'></i></button>";
    					echo "<div id='".$ce.$row["content_id"]."' class='w3-accordion-content w3-container'>";
    					echo $row["content_link"];
    					echo "</div>";
    				}
    			}
    			else
    			{
    				echo "<div class='w3-lime w3-large w3-card-2'>Code not available..!</div>";
    			}    		

    			?>		
    			 		

    		</div>
    			
		</div>
	</div>
	</body>
	<br/><br/>
	<?php require 'footer.php';?>
</html>