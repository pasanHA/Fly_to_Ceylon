<?php

$host='localhost';
$user='root';
$password='';
$db='fly to ceylon';

$connect=mysqli_connect($host,$user,$password,$db);

if (!$connect) 
{
    die("connection failed".mysqli_connect_error());
}

?>