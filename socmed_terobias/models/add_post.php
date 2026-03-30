
<?php
session_start();
include '../db/dbconnect.php';

$post_text = htmlspecialchars($_POST['post_area']);
$aid = $_SESSION['aid'];

$sql = "INSERT INTO post VALUES(0,$aid,'$post_text',NOW(),NOW());";

$result=$con->query($sql);

$con->close();
header("location:../profile.php");
