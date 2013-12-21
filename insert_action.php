<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Final Project - XYZ Autos</title>
<link rel="stylesheet" href="css/project_style.css" type="text/css" />
<script type="text/javascript" src="http://jwpsrv.com/library/H0PNLLLfEeKyliIACpYGxA.js"></script> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
</head>

<body>

<?php include 'header.php'; ?>
<h1> Inventory Entry Results</h1>



<?php
if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'ikeogboc_p4';
$dbpass = 'pet247pet247';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
if(! get_magic_quotes_gpc() )
{
   $vin = addslashes ($_POST['vin']);
   $Make = addslashes ($_POST['Make']);
   $Model = addslashes ($_POST['Model']);
}
else
{
   $vin = $_POST['vin'];
   $Make = $_POST['Make'];
   $Model = $_POST['Model'];
}
$year = $_POST['year'];
$Price = $_POST['Price'];

$sql = "insert into tbinventory".
       "(vin,year, Make, Model, Price) ".
       "VALUES ('$vin', , $year, '$optone', '$opttwo', $Price)";
	   
mysql_select_db('ikeogboc_p4');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
?>







<hr id="headrule"/>
2013 XYZautos.com, Inc. All Rights Reserved. "XYZAutos.com" is a registered trademark of XYZ Autos, Inc. used under exclusive license.</div>
</body>
</html>


