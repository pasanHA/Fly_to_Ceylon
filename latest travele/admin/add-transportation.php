<?php
require_once('connection.php');
if(isset($_POST['submit']))
{
 $vehicle=$_POST['vehicle'];
// $description=$_POST['discription'];
$price=$_POST['price'];
$tele=$_POST['tele'];
// $additional=$_POST['additional'];

$query="INSERT INTO transportation (Vehicle_type,Price_per_1km,Telephone)
VALUES('$vehicle','$price','$tele')
 LIMIT 1";

$result=mysqli_query($connect,$query);
}
?>