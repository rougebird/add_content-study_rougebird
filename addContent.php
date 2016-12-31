<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<title>Add content to study.rougebird.in</title>
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
	
	<body>
	<?php require 'menu.php';?>	
	<div class='w3-main w3-card-4' style='margin-left:20px;margin-right: 20px;'><br>
	<!--<?php //echo htmlspecialchars('addC.php');?>"-->
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
						<option value="CSM">C# .NET Material</option>
						<option value="CSC">C# .NET Practicals</option>
						<option value="SAM">SA Material</option>
						<option value="SAL">SA Lab</option>
						<option value="MIS">Miscellaneous</option>
					</select>	
						<br>				
				<input class="w3-btn w3-blue" type="submit"><br><br>
			
			
		</form>
		<br>
	</div><br>
	</body>
	<footer class="w3-container w3-pale-blue w3-center w3-card-2 w3-round-small" style="margin-left:20px;margin-right: 20px">
    	<p><a href="http://rougebird.in/" class="w3-text-gray">rougebird.in</a></p>
	</footer>
</html>