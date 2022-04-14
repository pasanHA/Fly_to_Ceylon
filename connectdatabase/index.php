<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "abc";
$connect = mysqli_connect($host, $user, $pass, $db);
if(!$connect)
{
die("Connection failed: ". mysqli_connect_error());
}
$sql="SELECT * FROM personal_data";
$result=$connect->query($sql);
if($result->num_rows >0)
{
//output data of each row
while($row=$result->fetch_assoc())
{echo"ID:" .$row["id"]."-Name: " .$row["name"].
   "-DOB:" .$row["dob"]. "  "."<br>";}

}
else {echo "0 results";}
$connect->close();
?>