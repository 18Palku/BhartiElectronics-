<?php
$link=mysqli_connect("localhost","root","", "mobile1");
//checking connections
if($link===false)
{
	die("ERROR could'nt connect".mysqli_connect_error());
}