<?php
$connection= mysqli_connect("localhost","root","","document")or die("can't connect to database");
//document= mysqli_select_document("document",$connection);

$username=$_REQUEST["username"];
$password=$_REQUEST["password"];


$sql_insert="INSERT INTO student(username,password)VALUES('".$username."','".$password."')";

mysqli_query($connection,$sql_insert);

echo "record succesfully inserted";
?>

                                                        