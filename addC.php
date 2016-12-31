<?php

session_start();

error_reporting(E_ALL & ~E_NOTICE);

$servername = "localhost:3306";
$username = "rb_addC_user";
$password = "1RkTxN);~U=6";

//Connecting to DB
$conn = mysqli_connect($servername,$username,$password,"study_content");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//echo $cid;

//Inserting new content record into DB
$title=$_POST[c_title];
$desc=$_POST[c_desc];
$link=$_POST[c_downLink];
//$type=$_POST[c_type];
$cat=$_POST[c_cat];
$tab="";

switch($cat)
{
	case "SAM": $tab="content_sa_m";break;
	case "SAL": $tab="content_sa_l";break;
	case "CSM": $tab="content_cs_m";break;
	case "CSC": $tab="content_cs_c";break;
	case "MIS": $tab="content_store";break;
}

echo $tab. "<br/>". $cid;

//Getting content ID
$sql0="SELECT * FROM ".$tab;
//echo $sql0;

$result=mysqli_query($conn, $sql0);
if(mysqli_num_rows($result)>0)
{
	$cid=mysqli_num_rows($result)+1;
}
else
	$cid=1;

if(isset($_SESSION["uname"]))
	$uname=$_SESSION["uname"];
else
	$uname="stranger";


	$sql="INSERT INTO `".$tab."` (`content_id`, `uname`, `content_up_date`, `content_title`, `content_desc`, `content_link`) VALUES ('".$cid."', '".$uname."', '".date("Y-m-d")."','".$title."', '".$desc."', '".$link."')";

//echo $cat;
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>