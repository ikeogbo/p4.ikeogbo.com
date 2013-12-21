<?php include 'header.php'; ?>

<h2> XYZ INVENTORY</h2>
<?php
$dbhost = 'localhost';
$dbuser = 'ikeogboc_p4';
$dbpass = 'pet247pet247';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM tbinventory';

mysql_select_db('ikeogboc_p4');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Vin Number :{$row['vin']}  <br> ".
         "Year : {$row['year']} <br> ".
         "Make : {$row['Make']} <br> ".
		 "Model : {$row['Model']} <br> ".
		 "Price : {$row['Price']} <br> ".
         "--------------------------------<br>";
} 
echo "Car Inventory\n";
mysql_close($conn);
?>
<?php include 'footer.php'; ?>

