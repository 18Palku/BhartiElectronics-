<?php

$link=mysqli_connect("localhost","root","", "mobile1");
//checking connections
if($link===false)
{
	die("ERROR could'nt connect".mysqli_connect_error());
}
/*
$sql1="create table realme(
    				id int(20) primary key AUTO_INCREMENT,
                    Name varchar(100),
                    brand varchar(10),
                    Price int(10)
                   ) ";
if(mysqli_query($link,$sql1))
{
	echo "table created succesfully";
	
}
else
{
	echo"could not able to create table".mysqli_error($link);
}

$sql2="create table apple(
    				id int(20) primary key AUTO_INCREMENT,
                    Name varchar(100),
                    brand varchar(10),
                    Price int(10)
                   ) ";
if(mysqli_query($link,$sql2))
{
	echo "table created succesfully";
	
}
else
{
	echo"could not able to create table".mysqli_error($link);
}

$sql3="create table oneplus(
    				id int(20) primary key AUTO_INCREMENT,
                    Name varchar(100),
                    brand varchar(10),
                    Price int(10)
                   ) ";
if(mysqli_query($link,$sql3))
{
	echo "table created succesfully";
	
}
else
{
	echo"could not able to create table".mysqli_error($link);
}
$sql4="create table vivo(
    				id int(20) primary key AUTO_INCREMENT,
                    Name varchar(100),
                    brand varchar(10),
                    Price int(10)
                   ) ";
if(mysqli_query($link,$sql4))
{
	echo "table created succesfully";
	
}
else
{
	echo"could not able to create table".mysqli_error($link);
}*/

/*create billing table*/
$bill="create table bill(
    				id int(20) primary key AUTO_INCREMENT,
                    firstname varchar(100),
                    mobile varchar(10),
					phone int(10),
					email varchar(30),
					address varchar(50),
					city varchar(20),
                    state varchar(10),
					zip int(10)
                   ) ";
if(mysqli_query($link,$bill))
{
	echo "table created succesfully";
	
}

?>