<?php

session_start();

if(!isset($_SESSION["logged"]))
{
	$servername = "localhost:3306";
	$username = "rb_addC_user";
	$password = "1RkTxN);~U=6";
			
	//Connecting to DB
	$conn = mysqli_connect($servername,$username,$password,"study_content");

	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}

	//user validation code
	$uname=$_POST["usrname"];
	$passwd=$_POST["psw"];
	//echo $uname . $passwd;

	$sql="SELECT pwd from user_access WHERE uname='".$uname."'";
	//echo $sql;

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
    	//validating password
    	$row = mysqli_fetch_assoc($result);
        if($row["pwd"]==$passwd)
        {
        	
			$_SESSION["logged"]=true;
			$_SESSION["uname"]=$uname;

			if(isset($_SESSION['url'])) 
   				$url = $_SESSION['url']; // holds url for last page visited.
			else 
   				$url = "index.php"; // default page for 
   			//echo $url;

			header("Location: http://" . $_SERVER['HTTP_HOST']. $url); // perform correct redirect.
			
        }
        else
        {
        	echo "<div class='w3-container w3-panel w3-red w3-medium' >
            	Invalid Credentials..!
      			</div>";
        }
    
	} else 
	{
    	echo "<div class='w3-container w3-panel w3-red w3-medium' >
            	Invalid Credentials..!
      			</div>";
	}

	mysqli_close($conn);


	
}
else //Logout code
{
	unset($_SESSION['logged']);
	unset($_SESSION['uname']);
	if(isset($_SESSION['url'])) 
   		$url = $_SESSION['url']; // holds url for last page visited.
	else 
   		$url = "index.php"; // default page for 
   	//echo $url;

	header("Location: http://" . $_SERVER['HTTP_HOST']. $url); // perform correct redirect.
}





?>

