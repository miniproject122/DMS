<?php 
    if (!empty)($SERVER['HTTPS']) && ('on' ==$_SERVER['HTTPS']))
{
	$URI='HTTPS://';
}
else
{
	$uri='http://';
}
$uri .=$_SERVER['HTTP_HOST'];
header('location: '.$uri./xampp/);
exit;
?>
