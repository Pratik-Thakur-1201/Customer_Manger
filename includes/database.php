<?php
//connect to database
$dbhost='localhost';
$dbname='CustomerManage';
$dbuser='root';
$dbpass='';

//create object
$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

//handel errors
if(mysqli_connect_errno())
{
	echo 'This connection is failed '.mysqli_connect_error();
    die();
	}

?>