<?php
$host='localhost';
$user='root';
$dbpassword='';
$database_name='userdb';

$connection=mysqli_connect('localhost','root','','userdb');

if (mysqli_connect_errno()){
    die("Databese connection failed ".mysqli_connecr_error());
}

?>