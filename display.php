<!doctype html>
<html lang="en">

<head>
    <title>TestCMS</title>
</head>

<body>
<?php
error_reporting(0);
include_once('class/CMS.php');
$obj = new iShouvikCMS();
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = 'test';
$obj->table = 'cms';
$obj->connect();

echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

?>

</body>



</html>