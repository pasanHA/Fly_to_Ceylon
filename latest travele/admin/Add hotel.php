<?php require_once('connection.php'); ?>
<?php
if(isset($_POST['submit']))
{
 $hotel=$_POST['hotel'];
$description=$_POST['discription'];
$city=$_POST['city'];
$location=$_POST['location'];
$telephone=$_POST['telephone'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$rank=$_POST['rank'];

$query="INSERT INTO hotel (Hotel_Name,City,	Hotel_rank,	Price,	Discount,Telephone,	Destination_Name,City,	Discription)
VALUES('{$hotel}','{$city}','{$rank}','{$price}','{$discount}','{$telephone}','{$location}','{$city}','{$description}')
LIMIT 1";

$result=mysqli_query($connect,$query);
}



?>