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


//echo $cid;

//Inserting new content record into DB
$title=$_POST[cat_title];
$desc=$_POST[cat_desc];
$type=$_POST[cat_type];

//Getting content ID
$sql0="SELECT * FROM content_category";
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


	$sql="INSERT INTO `content_category` (`category_id`, `category_code`, `category_name`, `category_desc`, `category_type` `category_user`) VALUES ('".$cid."', 'cat".$cid."', '".$title."', '".$desc."', '".$type."','".$uname."');";

	//INSERT INTO `content_category` (`category_id`, `category_code`, `category_name`, `category_desc`, `category_user`) VALUES ('1', 'cat1', 'C# Practicals (Code)', 'Code snippets in C# .NET Hosted in Git Hub', 'ajay');

	$sql_creat_table="CREATE TABLE IF NOT EXISTS `content_cat".$cid."`(`content_id` int(10) NOT NULL,`uname` varchar(10) DEFAULT NULL,
`content_up_date` date DEFAULT NULL, `content_title` varchar(80) DEFAULT NULL,`content_desc` varchar(200) DEFAULT NULL,
`content_link` varchar(2083) DEFAULT NULL, PRIMARY KEY (`content_id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";


//echo $cat;
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New category created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>