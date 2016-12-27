<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
		<script>
			function aj_open() 
			{
    			document.getElementById("mySidenav").style.display = "block";
			}
			function aj_close() 
			{
    			document.getElementById("mySidenav").style.display = "none";
			}
		</script>
		<?php

			error_reporting(E_ALL & ~E_NOTICE);

			$servername = "localhost:3306";
			$username = "root";
			$password = "01100125";

			//Connecting to DB
			$conn = mysqli_connect($servername,$username,$password,"study_content");

			if (!$conn) {
    			die("Connection failed: " . mysqli_connect_error());
			}
		?>
	</head>
	<body >
	
		<div class="w3-card-4 w3-round-large w3-center w3-light-grey" style="margin-left:20px;margin-right: 20px">
			<h1 class="shadowNfont w3-xxxlarge">rougebird</h1> 
			<ul class="w3-navbar w3-indigo w3-card-4 w3-large w3-round">
    			<li><a href="index.php?cat=CSM">C# Reference Material</a></li>
    			<li class="w3-dropdown-hover">
    				<a href="#">System Administration</a>
    				<div class="w3-dropdown-content w3-white w3-card-4">
      					<a href="index.php?cat=SAM">Reference Material</a>
      					<a href="index.php?cat=SAL">Lab Experiments</a>
      				</div>
  				</li>
   			 	<li><a href="index.php?cat=MIS">Other</a></li>
  			</ul>
		</div>
	
	
	<div class="w3-main" style="margin-left:20px;margin-right: 20px; margin-top: 5px">
		<header class="w3-container w3-magenta">
  			<!-- <span class="w3-opennav w3-xlarge w3-hide-large" onclick="aj_open()">&#9776;</span> -->
  			<h2 >Study References</h2>
		</header>
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
					case "SAM": $tab="content_SA_M"; 
								echo "<h3>System Administration Reference Material</h3>";break;
					case "SAL": $tab="content_SA_L"; 
								echo "<h3>System Administration Lab Experiments</h3>"; break;
					case "CSM": $tab="content_CS_M";
								echo "<h3>C# .NET Programming Reference Material</h3>"; break;
					case "MIS": $tab="content_store";
								echo "<h3>Miscellaneous Reference Material</h3>";break;
					default: $tab="content_CS_M";
								echo "<h3>C# .NET Programming Reference Material</h3>"; break;
				}
				//echo $tab;
  				echo "<div class='w3-responsive w3-card-2' style='margin-top:10px'><table class='w3-table-all w3-hoverable' >";
  				echo "<tr><th>S.No</th><th>Date</th><th>Title</th><th>Description</th><th>Link</th></tr>";
  				$sql="SELECT * FROM `".$tab."`";
  				//echo $sql;
  				$result=mysqli_query($conn,$sql);
  				if (mysqli_num_rows($result) > 0) {
    				// output data of each row
    				while($row = mysqli_fetch_assoc($result)) {
        				echo "<tr>";
        				echo "<td>" . $row["content_id"]. "</td><td>" . $row["content_up_date"]. "</td><td>" . $row["content_title"]. "</td><td>" . $row["content_desc"]. "</td><td><a class='w3-btn w3-blue w3-hover-red' href='". $row["content_down_link"]."' >Download <i class='fa fa-download'></i></a></td>";
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
	<footer class="w3-container w3-pale-blue w3-center w3-card-2" style="margin-left:20px;margin-right: 20px">
    	<p><a href="http://study.rougebird.in/" class="w3-text-gray">rougebird.in</a></p>
	</footer>
    
</html>