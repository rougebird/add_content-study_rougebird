<?php
session_start();


$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<body >
	
		<?php require 'menu.php';?>	
	
	
	<div class='w3-main' style='margin-left:20px;margin-right: 20px;'>
		<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="w3-container" id="content">
  			<?php
  				//$cat="CSM";
  				
  				if ($_SERVER["REQUEST_METHOD"] == "GET") {
  						echo $cat;
  						$cat = htmlspecialchars($_GET["cat"]);
  				}
  				
  					
  				$tab="";
  				//echo $cat;
  				switch($cat)
				{
					case "SAM": $tab="content_sa_m"; 
								echo "<h5>System Administration Reference Material</h5>";break;
					case "SAL": $tab="content_sa_l"; 
								echo "<h5>System Administration Lab Experiments</h5>"; break;
					case "CSM": $tab="content_cs_m";
								echo "<h5>C# .NET Programming Reference Material</h5>"; break;
					case "MIS": $tab="content_store";
								echo "<h5>Miscellaneous Reference Material</h5>";break;
					default: $tab="content_cs_m";
								echo "<h5>C# .NET Programming Reference Material</h5>"; break;
				}
				//echo $tab;
  				echo "<div class='w3-responsive w3-card-2 ' style='margin-top:5px'><table class='w3-table-all w3-hoverable w3-small' >";
  				echo "<tr><th>S.No</th><th>Date</th><th>Title</th><th>Description</th><th>Link</th></tr>";
  				$sql="SELECT * FROM `".$tab."`";
  				//echo $sql;
  				$result=mysqli_query($conn,$sql);
  				if (mysqli_num_rows($result) > 0) {
    				// output data of each row
    				while($row = mysqli_fetch_assoc($result)) {
        				echo "<tr>";
        				echo "<td >" . $row["content_id"]. "</td><td>" . $row["content_up_date"]. "</td><td>" . $row["content_title"]. "</td><td>" . $row["content_desc"]. "</td><td><a class='w3-btn w3-blue w3-hover-red w3-ripple  ' href='". $row["content_down_link"]."' >Download <i class='fa fa-download'></i></a></td>";
    					echo "</tr>";
    				}
				} else {
    				echo "<tr class='w3-lime'><td colspan='5'>0 results - Content has not been uploaded yet..!</td></tr>";
				}
				echo "</table></div>";
				mysqli_close($conn);
  			?>
  			<br/>
  			
		</div>
		</form>
	</div>

	
	</body>
	<?php require 'footer.php';?>	
    
</html>