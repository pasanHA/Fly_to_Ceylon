<?php require_once('connection.php'); ?>
<?php
if(isset($_POST['submit']))
{
    $airline=$_POST['airline'];
$passengers=$_POST['passengers'];
$date=$_POST['fdate'];
$fclass=$_POST['flight_class'];
$additional=$_POST['additional'];

$query="INSERT INTO airline(Airline_ID,No_of_Passangers,Date,Class,Additional_Info)
VALUES('{$airline}',{$passengers},'{$date}','{$fclass}','{$additional}')
LIMIT 1";

$result=mysqli_query($connect,$query);
}



?>