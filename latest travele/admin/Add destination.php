<?php require_once('connection.php'); ?>
<?php
if(isset($_POST['submit']))
{
 $destination=$_POST['destination'];
$description=$_POST['discription'];
$city=$_POST['city'];
// $fclass=$_POST['flight_class'];
// $additional=$_POST['additional'];

$query="INSERT INTO destination (Destination_Name,City,Discription)
VALUES('{$destination}','{$city}','{$description}')
LIMIT 1";

$result=mysqli_query($connect,$query);
}



?>