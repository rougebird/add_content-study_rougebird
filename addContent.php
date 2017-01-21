<?php
session_start();
if(!isset($_SESSION["logged"]) )
{
	$url="Error.php";
	header("Location: http://" . $_SERVER['HTTP_HOST']. $url);
}
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

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<title>Add content to study.rougebird.in</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
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
	
	<body>
	<?php require 'menu.php';?>	
	<div class='w3-main w3-card-4' style='margin-left:20px;margin-right: 20px;'><br>
	
		<form class="w3-container w3-card-2" action="<?php echo htmlspecialchars('addC.php');?>" method="post" style='margin-left:20px;margin-right: 20px;'>
			
			<h3>Adding content</h3>
				<label class="w3-label">Content Title: *</label><br>
				<input class="w3-input w3-border w3-animate-input w3-small" type="Text" name="c_title" style="width: 30%" required>
				<br>
			
			
				<label class="w3-label">Content Description: *</label><br>
				<textarea class="w3-input w3-border w3-animate-input w3-small" name="c_desc" style="width: 50%; height: 60px" required></textarea>
				<br>
			
			
				<lable class="w3-label">Content Download Link / Script form Pasting Bin: *</lable><br>
				<input class="w3-input w3-border w3-animate-input w3-small" type="Text" name="c_downLink" style="width: 30%" required>
				<br>
							
				<label class="w3-label">Content Category: *</label><br>
					<select class="w3-input w3-select w3-border" name="c_cat" style="width: 30%" required>
						<option value=""></option>
						<?php
							$sql="SELECT * FROM `content_category`";
							$result=mysqli_query($conn,$sql);
  							if (mysqli_num_rows($result) > 0) {
    						// output data of each row
    							while($row = mysqli_fetch_assoc($result)) {
        							echo "<option value='".$row["category_code"]."'>".$row["category_name"]."</option>";
								}
							  }
							  mysqli_close($conn);
						?>											
					</select>	
						<br>				
				<input class="w3-btn w3-blue" type="submit"><br><br>
			
			
		</form>
		<br>
	</div><br>
	</body>
	<?php require 'footer.php';?>
</html>