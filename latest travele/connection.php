<?php

$host='localhost';
$user='root';
$password='';
$db='pasan1';

$connect=mysqli_connect($host,$user,$password,$db);

if (!$connect) 
{
    die("connection failed".mysqli_connect_error());
}

?>