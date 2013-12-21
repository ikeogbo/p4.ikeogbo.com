<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Final Project - XYZ Autos</title>
<link rel="stylesheet" href="css/project_style.css" type="text/css" />
<script type="text/javascript" src="http://jwpsrv.com/library/H0PNLLLfEeKyliIACpYGxA.js"></script> 
<script type="text/javascript" src="css/jquery-1.9.1.min.js"></script>


</head>

<body>
 <div id="mainarea">                
<div id ="header">
<h3> 203 701 1XYZ<br/>
  (1999)</h3>
</div>

<div id="breadnav">

<a href="info_entry.php">Our Representatives</a>&nbsp; | &nbsp;
<a href="#">Testimonials</a>&nbsp; | &nbsp;
</div>



<div id="sitenav">
<ul id ="nav">
<li><a href="index.php">HOME</a></li>
<li><a href="#">ABOUT XYZ</a></li>
<li><a href="inventory.php">INVENTORY</a></li>
<li><a href= "support.php">SUPPORT </a></li>
</ul>
</div>

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
   $Make = $_POST['Model'];   
}
$year = $_POST['year'];
$Price = $_POST['Price'];
$sql = "INSERT INTO tbinventory
       (vin, year, make, model, price)
       VALUES('$vin', '$year','$Make', '$Model', '$Price')";
mysql_select_db('ikeogboc_p4');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">


<table>
<tr>
<td>*Vin</td>
<td><input type="text" name="vin" maxlength="16"/>Enter 16 digit alphanumerical characters</td>
</tr>
<tr>
<td>*Year</td>
<td></b><input type="text" name="year" maxlength="4"/> Enter Year like 2013</td>
</tr>
<tr>
<td>*Make</td>
<td><input name="Make" type="text" id="Make"></td>
</tr>
<td>*Model</td>
<td><input name="Model" type="text" id="Model"></td>
</tr>
<td>*Price</td>
<td><input name="Price" type="text" id="Price"></td>
</tr>
<tr>
<td> </td>
<td> </td>
</tr>
<tr>
<td> </td>
<td>
<input name="add" type="submit" id="add" value="Add Inventory">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>

