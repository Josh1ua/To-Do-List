<?php
include 'common.php';

$tname = $_POST['tname'];
$email = $_SESSION['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$description = $_POST['description'];

$sql="SELECT * FROM `Tasks` WHERE 1";
$result=mysqli_query($dbc,$sql);
$id = mysqli_num_rows($result) + 1;
echo ($id);
$sql = "INSERT INTO `Tasks`(`taid`, `email`, `Task_Name`, `Date`, `Time`, `Description`) VALUES ('$id','$email','$tname','$date','$time','$description')";
mysqli_query($dbc, $sql);
echo ("ok");
header('location: index.php');
?>